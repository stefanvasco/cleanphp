<?php

use Evenement\EventEmitterInterface;
use Peridot\Plugin\Prophecy\ProphecyPlugin;
use Peridot\Plugin\Watcher\WatcherInterface;
use Peridot\Plugin\Watcher\WatcherPlugin;

return function(EventEmitterInterface $emitter) {
    $watcher = new WatcherPlugin($emitter);
    $watcher->setEvents([WatcherInterface::CREATE_EVENT, WatcherInterface::MODIFY_EVENT]);
    $watcher->track(dirname(__FILE__).'/src/');

    new ProphecyPlugin($emitter);
};

