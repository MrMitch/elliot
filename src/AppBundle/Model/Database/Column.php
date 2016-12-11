<?php

namespace AppBundle\Model\Database;


class Column
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $type;

    /** @var string */
    protected $description;

    /** @var string */
    protected $longDescription;

    /** @var string */
    protected $heading;

    /** @var int */
    protected $length;

    /** @var int */
    protected $scale;

    /** @var int */
    protected $position;

    /** @var string */
    protected $owner;

    /** @var bool */
    protected $identity;

    /** @var string */
    protected $identityGeneration;

    /** @var bool */
    protected $nullable;

    /** @var Table */
    protected $table;

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
     * @return Column
     */
    public function setName(string $name): Column
    {
        $this->name = $name;

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
     * @return Column
     */
    public function setType(string $type): Column
    {
        $this->type = $type;

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
     * @return Column
     */
    public function setDescription(string $description): Column
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
     * @return Column
     */
    public function setLongDescription(string $longDescription): Column
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @param string $heading
     * @return Column
     */
    public function setHeading(string $heading): Column
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return Column
     */
    public function setLength(int $length): Column
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return int
     */
    public function getScale(): int
    {
        return $this->scale;
    }

    /**
     * @param int $scale
     * @return Column
     */
    public function setScale(int $scale): Column
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return Column
     */
    public function setPosition(int $position): Column
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return Column
     */
    public function setOwner(string $owner): Column
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIdentity(): bool
    {
        return $this->identity;
    }

    /**
     * @param boolean $identity
     * @return Column
     */
    public function setIdentity(bool $identity): Column
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityGeneration(): string
    {
        return $this->identityGeneration;
    }

    /**
     * @param string $identityGeneration
     * @return Column
     */
    public function setIdentityGeneration(string $identityGeneration): Column
    {
        $this->identityGeneration = $identityGeneration;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isNullable(): bool
    {
        return $this->nullable;
    }

    /**
     * @param boolean $nullable
     * @return Column
     */
    public function setNullable(bool $nullable): Column
    {
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * @return Table
     */
    public function getTable(): Table
    {
        return $this->table;
    }

    /**
     * @param Table $table
     * @return Column
     */
    public function setTable(Table $table): Column
    {
        $this->table = $table;

        return $this;
    }
    //</editor-fold>
}
