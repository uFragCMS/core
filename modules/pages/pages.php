<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Pages;

use UF\uFrag\Addons\Module;

class Pages extends Module
{
	protected function __info()
	{
		return [
			'title'       => $this->lang('Pages'),
			'description' => '',
			'icon'        => 'far fa-file',
			'link'        => 'https://neofr.ag',
			'author'      => 'Michaël BILCOT & Jérémy VALENTIN <contact@ufrag.com>',
			'license'     => 'LGPLv3 <https://neofr.ag/license>',
			'admin'       => TRUE,
			'routes'      => [
				//Index
				'{url_title}'             => '_index',

				//Admin
				'admin{pages}'            => 'index',
				'admin/{id}/{url_title*}' => '_edit'
			]
		];
	}

	public function permissions()
	{
		return [
			'default' => [
				'access'  => [
					[
						'title'  => 'Pages',
						'icon'   => 'far fa-file',
						'access' => [
							'add_pages' => [
								'title' => 'Ajouter',
								'icon'  => 'fas fa-plus',
								'admin' => TRUE
							],
							'modify_pages' => [
								'title' => 'Modifier',
								'icon'  => 'fas fa-edit',
								'admin' => TRUE
							],
							'delete_pages' => [
								'title' => 'Supprimer',
								'icon'  => 'far fa-trash-alt',
								'admin' => TRUE
							]
						]
					]
				]
			],
			'page' => [
				'get_all' => function(){
					return uFrag()->db->select('p.page_id', 'CONCAT_WS(" ", "Page", pl.title)')->from('nf_pages p')->join('nf_pages_lang pl', 'p.page_id = pl.page_id')->where('pl.lang', $this->config->lang->info()->name)->get();
				},
				'check'   => function($page_id){
					if (($page = uFrag()->db->select('title')->from('nf_pages_lang')->where('page_id', $page_id)->where('lang', $this->config->lang->info()->name)->row()) !== [])
					{
						return 'Page '.$page;
					}
				},
				'init'    => [
					'access_page' => []
				],
				'access'  => [
					[
						'title'  => 'Pages',
						'icon'   => 'far fa-file',
						'access' => [
							'access_page' => [
								'title' => 'Accès au contenu',
								'icon'  => 'far fa-eye'
							]
						]
					]
				]
			]
		];
	}
}
