<?php

namespace AppBundle\Model\Database;


class Schema
{
    /** @var string */
    protected $name;

    /** @var Table[] */
    protected $tables;

    //<editor-fold desc="getters setters">
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Schema
     */
    public function setName(string $name): Schema
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Table[]
     */
    public function getTables(): array
    {
        return $this->tables;
    }

    /**
     * @param Table[] $tables
     * @return Schema
     */
    public function setTables(array $tables): Schema
    {
        $this->tables = $tables;

        return $this;
    }
    //</editor-fold>
}
