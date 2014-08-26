<?php


namespace FlexPress\Plugins;

abstract class AbstractPlugin
{

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var \Pimple
     */
    protected $pimple;

    /**
     *
     * Initialises the plugin for the given plugin file
     *
     * @param $file
     * @author Tim Perry
     *
     */
    public function init($file)
    {
        $this->path = dirname($file);
        $this->url = plugin_dir_url($file);
    }
}
