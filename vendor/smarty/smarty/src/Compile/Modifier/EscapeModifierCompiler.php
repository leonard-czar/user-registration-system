<?php
namespace Smarty\Compile\Modifier;

use Smarty\Exception;

/**
 * Smarty escape modifier plugin
 * Type:     modifier
 * Name:     escape
 * Purpose:  escape string for output
 *
 * @author Rodney Rehm
 */

class EscapeModifierCompiler extends Base {

	public function compile($params, \Smarty\Compiler\Template $compiler) {
		try {
			$esc_type = $this->literal_compiler_param($params, 1, 'html');
			$char_set = $this->literal_compiler_param($params, 2, \Smarty\Smarty::$_CHARSET);
			$double_encode = $this->literal_compiler_param($params, 3, true);
			if (!$char_set) {
				$char_set = \Smarty\Smarty::$_CHARSET;
			}
			switch ($esc_type) {
				case 'html':
					return 'htmlspecialchars((string)' . $params[ 0 ] . ', ENT_QUOTES, ' . var_export($char_set, true) . ', ' .
						var_export($double_encode, true) . ')';
				// no break
				case 'htmlall':
					return 'htmlentities(mb_convert_encoding((string)' . $params[ 0 ] . ', \'UTF-8\', ' .
						var_export($char_set, true) . '), ENT_QUOTES, \'UTF-8\', ' .
						var_export($double_encode, true) . ')';
				// no break
				case 'url':
					return 'rawurlencode((string)' . $params[ 0 ] . ')';
				case 'urlpathinfo':
					return 'str_replace("%2F", "/", rawurlencode((string)' . $params[ 0 ] . '))';
				case 'quotes':
					// escape unescaped single quotes
					return 'preg_replace("%(?<!\\\\\\\\)\'%", "\\\'", (string)' . $params[ 0 ] . ')';
				case 'javascript':
					// escape quotes and backslashes, newlines, etc.
					// see https://html.spec.whatwg.org/multipage/scripting.html#restrictions-for-contents-of-script-elements
					return 'strtr((string)' .
						$params[ 0 ] .
						', array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\"" => "\\\\\"", "\\r" => "\\\\r", 
						"\\n" => "\\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\\\`", "\${" => "\\\\\\$\\{"))';
			}
		} catch (Exception $e) {
			// pass through to regular plugin fallback
		}
		return '$_smarty_tpl->getSmarty()->getModifierCallback(\'escape\')(' . join(', ', $params) . ')';
	}
}