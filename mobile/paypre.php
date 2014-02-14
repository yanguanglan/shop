<?php

/**
 * ECSHOP 商品详情
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liuhui $
 * $Id: goods.php 17063 2010-03-25 06:35:46Z liuhui $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

$pre_id = isset($_REQUEST['id'])  ? intval($_REQUEST['id']) : 0;

/*------------------------------------------------------ */
//-- 商品购买记录ajax处理
/*------------------------------------------------------ */

if (!empty($_REQUEST['alipay']))
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('err_msg' => '', 'result' => '');
    
    $user_id = $_SESSION['user_id'];
    $pre_id   = isset($_REQUEST['pre_id']) ? intval($_REQUEST['pre_id']) : 0;
    
    

    die($json->encode($res));
}

$sql = "SELECT o.*,g.goods_name,g.onlinepay,g.rooms as grooms FROM ".$ecs->table('pre_order')." o LEFT JOIN ".$ecs->table('goods')." g USING (goods_id) WHERE o.pre_id = '".$pre_id."'";
$row = $GLOBALS['db']->getRow($sql);
$row['rooms']=json_decode($row['rooms'],true);
$smarty->assign('pre',$row);
$smarty->assign('pre',$row);

$smarty->display('paypre.dwt');

?>