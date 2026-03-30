<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260316105239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achats (id INT AUTO_INCREMENT NOT NULL, smartphone INT NOT NULL, tablette INT NOT NULL, voiture INT NOT NULL, vetement INT NOT NULL, cosmetique INT NOT NULL, produit_livre INT NOT NULL, electromenager INT NOT NULL, veste INT NOT NULL, manteau INT NOT NULL, jean INT NOT NULL, chaussures INT NOT NULL, livre INT NOT NULL, journal INT NOT NULL, velo_mecanique INT NOT NULL, velo_electrique INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE achats');
    }
}
