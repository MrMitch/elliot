<?php

namespace AppBundle\Model\Database;


class Table
{
    /** @var string */
    protected $name;

    /** @var Schema */
    protected $schema;

    /** @var string */
    protected $type;

    /** @var int */
    protected $columnCount;

    /** @var string */
    protected $description;

    /** @var string */
    protected $longDescription;

    /** @var Column[] */
    protected $columns;

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
     * @return Table
     */
    public function setName(string $name): Table
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Schema
     */
    public function getSchema(): Schema
    {
        return $this->schema;
    }

    /**
     * @param Schema $schema
     * @return Table
     */
    public function setSchema(Schema $schema): Table
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Table
     */
    public function setType(string $type): Table
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getColumnCount(): int
    {
        return $this->columnCount;
    }

    /**
     * @param int $columnCount
     * @return Table
     */
    public function setColumnCount(int $columnCount): Table
    {
        $this->columnCount = $columnCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Table
     */
    public function setDescription(string $description): Table
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription(): string
    {
        return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return Table
     */
    public function setLongDescription(string $longDescription): Table
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * @return Column[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @param Column[] $columns
     * @return Table
     */
    public function setColumns(array $columns): Table
    {
        $this->columns = $columns;

        return $this;
    }
    //</editor-fold>
}
