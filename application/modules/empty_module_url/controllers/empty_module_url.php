<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empty_module_url extends MX_Controller {
     
    /**
     * Dlya glavnyh modulei ukazyvaem shablon i parsim v kontent
     */
    
    private $mname, $tag;
    public $tpl, $funcs; 
    
    function __construct()
    {
        $this->tpl='p_default.tpl'; // shablon stranicy
        $this->mname=strtolower(get_class());// 'cabient' imya modulya
        $this->funcs=array(''); // dostupnye funkcii - 3 parametr v urle
    } 
    
    public function index()
    {
        $this->load->model($this->mname.'/'.$this->mname.'_model');
        $m=$this->mname.'_model';
        $this->$m->index($this->mname);
                
        $this->tp->parse('CONTENT', $this->mname.'/'.$this->mname.'.tpl');
    }
    
}
