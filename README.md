# FlexPress plugin component

Note there is a boilerplate framework you can use instead of trying to use this manually:
```
composer create-project flexpress/plugin-framework <pluginname>
```

## Creating a concreate class
You need to create a concreate class that extends the Abstract Plugin class:

```
class MyPlugin extends AbstractPlugin
{
}
```

You can optionally override the init method like this:

```
class MyPlugin extends AbstractPlugin
{
  public function init($file)
  {
    parent::init($file);
  }
}
```
This allows you to add your initalisation code for helpers like the taxonomy and post types components.

## Install via pimple

Once you are all done setting up your class you need to add the config to pimple:
```
$pimple['myPlugin'] = function(){
  return new MyPlugin();
};
```


## Usage
Finally to set it up, grab it from pimple and call the init method with the current file, which should be the pluginsname.php file in the root of the plugin folder:
  ```
  $plugin = $pimple['myPlugin'];
  $plugin->init(__FILE__);
  ```
