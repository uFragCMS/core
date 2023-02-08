<?php
/**
 * https://neofr.ag
 * @author: Michaël BILCOT <michael.bilcot@neofr.ag>
 */

namespace UF\Modules\Comments\Controllers;

use UF\uFrag\Loadables\Controllers\Module as Controller_Module;

class Admin extends Controller_Module
{
	public function index($comments)
	{
		return $this->table2($comments, 'Aucun commentaire')
					->col('Module', function($comment){
						$info = $this->module(preg_replace('/_.*$/', '', $comment->module))->info();
						return uFrag()->label($info->title, $info->icon);
					})
					->col('Auteur', function($comment){
						return $comment->user->link();
					})
					->col('Date', 'date')
					->col('Message', 'content')
					->panel();
	}
}
