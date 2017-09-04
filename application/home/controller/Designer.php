<?php
/**
 * 店铺装修
 */ 
 
namespace app\home\controller;
class Designer extends Base {
    /**
     * 店铺装修admin管理
     */
    public function admin(){
        $pageid = I('get.pageid');
        $designerMd = D('Designer');
        $designerMenuMd = D('DesignerMenu');
        $menus = $designerMenuMd->where(array('uniacid'=>'2'))->getField('id,menuname,isdefault',true);
        $pages = $designerMd->where(array('uniacid'=>'2'))->getField('id,pagename,pagetype,setdefault',true);
        if (!empty($pageid)) {
            $datas = $designerMd->where(array('uniacid'=>2,'id'=>$pageid))->find();
            $data  = htmlspecialchars_decode($datas['datas']);
            $data  = json_decode($data, true);
            if (!empty($data)) {
                foreach ($data as $i1 => &$dd) {
                    if ($dd['temp'] == 'goods') {
                        foreach ($dd['data'] as $i2 => &$ddd) {
                            $goodinfo = pdo_fetchall("SELECT id,title,productprice,marketprice,thumb FROM " . tablename('sea_goods') . " WHERE uniacid= :uniacid and id=:goodid", array(
                                ':uniacid' => $_W['uniacid'],
                                ':goodid' => $ddd['goodid']
                            ));
                            $goodinfo = set_medias($goodinfo, 'thumb');
                            if (!empty($goodinfo)) {
                                $data[$i1]['data'][$i2]['name']     = $goodinfo[0]['title'];
                                $data[$i1]['data'][$i2]['priceold'] = $goodinfo[0]['productprice'];
                                $data[$i1]['data'][$i2]['pricenow'] = $goodinfo[0]['marketprice'];
                                $data[$i1]['data'][$i2]['img']      = $goodinfo[0]['thumb'];
                            }
                        }
                        unset($ddd);
                    } elseif ($dd['temp'] == 'richtext') {
                        $dd['content'] = $this->model->unescape($dd['content']);
                    } elseif ($dd['temp'] == 'cube') {
                        $dd['params']['currentLayout']['isempty'] = true;
                        $dd['params']['selection']                = null;
                        $dd['params']['currentPos']               = null;
                        $has                                      = false;
                        $newarr                                   = new \stdClass();
                        foreach ($dd['params']['layout'] as $k => $v) {
                            $arr = new \stdClass();
                            foreach ($v as $kk => $vv) {
                                $arr->$kk = $vv;
                            }
                            $newarr->$k = $arr;
                        }
                        $dd['params']['layout'] = $newarr;
                    }
                }
                $data = json_encode($data);
            }
            $data     = rtrim($data, "]");
            $data     = ltrim($data, "[");
            $pageinfo = htmlspecialchars_decode($datas['pageinfo']);
            $pageinfo = rtrim($pageinfo, "]");
            $pageinfo = ltrim($pageinfo, "[");
            //$shopset  = m('common')->getSysset('shop');
            $system   = array(
                'shop' => array(
                    'name' => '威客巴拉',
                    'logo' => ''
                )
            );
            $system   = json_encode($system);
        } else {
            $defaultmenuid = 1;
            $pageinfo      = "{id:'M0000000000000',temp:'topbar',params:{title:'',desc:'',img:'',kw:'',footer:'1',footermenu:'{$defaultmenuid}', floatico:'0',floatstyle:'right',floatwidth:'40px',floattop:'100px',floatimg:'',floatlink:''}}";
        }
        $this->assign('data',$data);
        $this->assign('menus',$menus);
        $this->assign('datas',$datas);
        $this->assign('system',$system);
        $this->assign('pageinfo',$pageinfo);
        return $this->fetch();
    }
    public function uploadimg(){
        $filename = uniqid().'.png';
        $path = UPLOAD_PATH.'/designerupload/';
        $filepath = $path.$filename;
        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
        $return['url'] = 'http://www.weiketp5.net/'.$filepath;
        return json_encode($return);
    }
    /**
     * 店铺装修前台展示页面
     */
    public function index(){

    }
}
