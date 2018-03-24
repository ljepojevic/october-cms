<?php 
namespace Autumn\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase {

	public function pluginDetails(){
		return [
			'name' => 'Autumn',
			'description' => 'Provides some resources',
			'author' => 'Milan Ljepojevic',
			'icon' => 'icon-leaf'
		];
	}

	public function registerComponents(){
		return [
			'\Autumn\Resources\Components\Links' => 'resourcesLinks'
		];
	}

}