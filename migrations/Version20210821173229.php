<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210821173229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE client (id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE agent ADD email VARCHAR(180) NOT NULL');
        $this->addSql('ALTER TABLE agent ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE agent DROP nom');
        $this->addSql('ALTER TABLE agent DROP prenom');
        $this->addSql('ALTER TABLE agent DROP telephone');
        $this->addSql('ALTER TABLE agent DROP username');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_268B9C9DE7927C74 ON agent (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE client_id_seq CASCADE');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP INDEX UNIQ_268B9C9DE7927C74');
        $this->addSql('ALTER TABLE agent ADD nom VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE agent ADD prenom VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE agent ADD telephone VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent ADD username VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE agent DROP email');
        $this->addSql('ALTER TABLE agent DROP roles');
    }
}
