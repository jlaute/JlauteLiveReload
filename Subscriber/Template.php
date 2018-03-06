<?php

namespace JlauteLiveReload\Subscriber;

use Enlight\Event\SubscriberInterface;
use Enlight_Event_EventArgs as EventArgs;

class Template implements SubscriberInterface
{

    /**
     * @var string
     */
    private $viewDir;

    /**
     * Template constructor.
     * @param $viewDir
     */
    public function __construct($viewDir)
    {
        $this->viewDir = $viewDir;
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return [
            'Theme_Inheritance_Template_Directories_Collected' => 'onTemplateDirectoriesCollect',
        ];
    }

    /**
     * adds the plugin views directory to the shopware template directories.
     * needs to be done here, in order to overwrite the documents template.
     *
     * @param EventArgs $args
     */
    public function onTemplateDirectoriesCollect(EventArgs $args)
    {
        $dirs = $args->getReturn();

        $dirs[] = $this->viewDir;

        $args->setReturn($dirs);
    }
}
