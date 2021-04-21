<?php

	namespace PDLoader;

	class Webfonts extends Loader{

		public function font($name,$url=false){
			if( !$url ){
				if( $this->config() && isset($this->config()['url'] ) ){
					$url = $this->config()['url'];
				}else{
					$url = $this->url();
				}
			}
			echo "<link rel='stylesheet' href='".$url."loader/modules/Webfonts/fonts/".$name."/stylesheet.css'>\n";
		}
	}