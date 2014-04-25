<?php

/**
 * WPML lang switcher
 * 
 * icl_get_languages params:
 * icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str')
 * N=0/1
 * KEY=id/code/name/custom (name -> translated_name), (default: id)
 * DIR=asc/desc (default: asc)
 * link_empty_to = str (default: empty, works in conjunction with skip_missing=0 and allows using custom links for the languages that do not have translations for the current element. {%lang} can be used as placeholder for the language code)
 */

function jett_lang_switcher($ulclass = '') {

	if (function_exists('icl_get_languages')) {
		$langs = icl_get_languages('skip_missing=0&orderby=custom');

		echo '<ul class="langswitch '.$ulclass.'">';

		foreach ($langs as $l) {
			$active = $l['active'];
			$nat_name = $l['native_name'];
			$code = $l['language_code'];
			$url = $l['url'];

			$active_class = ($active) ? ' langswitch__item--active' : '';

			echo '<li class="langswitch__item langswitch__item--' . $code . $active_class . '"><a href="'.$url.'" title="'.$nat_name.'" class="langswitch__href">'.$code.'</a><i class="langswitch__icon">&nbsp;</i></li>';
		}

		echo '</ul>';

	}
}
