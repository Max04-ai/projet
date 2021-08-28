<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210820091837 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agent ADD prenom VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE agent ADD telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent DROP password');
        $this->addSql('ALTER TABLE agent DROP email');
        $this->addSql('ALTER TABLE agent ALTER nom TYPE VARCHAR(100)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE agent ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent DROP prenom');
        $this->addSql('ALTER TABLE agent ALTER nom TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE agent RENAME COLUMN telephone TO password');
    }
}
