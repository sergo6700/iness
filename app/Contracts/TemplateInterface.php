<?php


namespace App\Contracts;


interface TemplateInterface
{

    /**
     * @return mixed
     */
    public function getTemplateNames();

    /**
     * @param $name
     * @return mixed
     */
    public function getTemplateName($name);

    /**
     * @param $name
     * @return mixed
     */
    public function getTemplateFields($name);

    /**
     * @param $name
     * @return mixed
     */
    public function checkTemplateName($name);

}
