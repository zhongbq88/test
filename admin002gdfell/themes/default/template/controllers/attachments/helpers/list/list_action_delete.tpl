{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<a href="{$href|escape:'html':'UTF-8'}"{if isset($confirm)} onclick="{if isset($product_attachements[$id_attachment|escape:'html':'UTF-8'])}if (attachments.confirmProductAttached('{$product_list[$id_attachment|escape:'html':'UTF-8']}')){ldelim}return true;{rdelim}else{ldelim}event.stopPropagation(); event.preventDefault();{rdelim};{else}return confirm('{$confirm}'){/if}"{/if} title="{$action|escape:'html':'UTF-8'}" class="delete">
	<i class="icon-trash"></i> {$action|escape:'html':'UTF-8'}
</a>
