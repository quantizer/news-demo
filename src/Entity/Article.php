<?php

namespace App\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Article.git remote add origin https://github.com/quantizer/news-demo.git
 *
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Article title.
     *
     * @var string
     *
     * @ORM\Column(type="string", name="title", nullable=false)
     */
    private $title;

    /**
     * Article content.
     *
     * @var string
     *
     * @ORM\Column(type="text", name="text", nullable=false)
     */
    private $text;

    /**
     * Is
     *
     * @var boolean
     *
     * @ORM\Column(type="boolean", name="is_published", nullable=false, options={"default": 0})
     */
    private $isPublished;

    /**
     * Date when article created.
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="created_at", nullable=true)
     *
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * Date when article updated.
     *
     * @var \DateTime|null
     *
     * @ORM\Column(type="datetime", name="updated_at", nullable=true)
     *
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * Article constructor.
     */
    public function __construct()
    {
        $this->isPublished = 0;
    }

    /**
     * Get article id.
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get created at.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set created at.
     *
     * @param \DateTime $createdAt
     *
     * @return Article
     */
    public function setCreatedAt(\DateTime $createdAt): Article
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get updated at.
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Set updated at.
     *
     * @param \DateTime|null $updatedAt
     *
     * @return Article
     */
    public function setUpdatedAt(?\DateTime $updatedAt = null): Article
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle(string $title): Article
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Article
     */
    public function setText(string $text): Article
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Is published.
     *
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->isPublished;
    }

    /**
     * Set is published.
     *
     * @param boolean $isPublished
     *
     * @return Article
     */
    public function setIsPublished(bool $isPublished): Article
    {
        $this->isPublished = $isPublished;

        return $this;
    }
}
