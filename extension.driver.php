<?php

	Class extension_minimal_backend extends Extension{

		public function about() {
			return array(
				'name'         => 'Minimal Backend',
				'version'      => '0.9',
				'release-date' => '2011-06-12',
				'author'       => array(
					'name'    => 'Johannes Stühler',
					'website' => 'http://www.obsessive.de',
					'email'   => 'jstuehler@obsessive-media.de'
				),
				'description'	=> 'Minimal header and footer, and floating navigation bar.'
			);
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'initaliseAdminPageHead'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function initaliseAdminPageHead() {
			$assets_path = '/extensions/minimal_backend/assets/';
			
			Administration::instance()->Page->addStylesheetToHead(URL . $assets_path . 'minimalBackend.style.css', 'screen', 3001, false);
			Administration::instance()->Page->addScriptToHead(URL . $assets_path . 'minimalBackend.script.js', 3002);
		}

	}

?>