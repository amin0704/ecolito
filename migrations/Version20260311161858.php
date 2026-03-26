<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260311161858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conso_aliments (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, poulet DOUBLE PRECISION NOT NULL, boeuf INT NOT NULL, fromage DOUBLE PRECISION NOT NULL, pates DOUBLE PRECISION NOT NULL, riz DOUBLE PRECISION NOT NULL, oeufs DOUBLE PRECISION NOT NULL, pommedeterre DOUBLE PRECISION NOT NULL, salade DOUBLE PRECISION NOT NULL, tomate DOUBLE PRECISION NOT NULL, oignons DOUBLE PRECISION NOT NULL, pomme DOUBLE PRECISION NOT NULL, poire DOUBLE PRECISION NOT NULL, orange DOUBLE PRECISION NOT NULL, raisin DOUBLE PRECISION NOT NULL, cafe DOUBLE PRECISION NOT NULL, lait DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE conso_aliments');
    }
}
