<?php

namespace Dhl\Express\Webservice\Soap\Type\DocumentRendering;

class Message
{

    /**
     * @var string $Category
     */
    protected $Category;

    /**
     * @var string $Description
     */
    protected $Description;

    /**
     * @param string $Category
     * @param string $Description
     */
    public function __construct($Category, $Description)
    {
        $this->Category = $Category;
        $this->Description = $Description;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Message
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Dhl\Express\Webservice\Soap\Type\DocumentRendering\Message
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }
}
