<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260322103449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trajets (id INT AUTO_INCREMENT NOT NULL, voiture INT NOT NULL, train INT NOT NULL, bus INT NOT NULL, avion INT NOT NULL, velo_mecanique INT NOT NULL, velo_electrique INT NOT NULL, voiture_electrique INT NOT NULL, moto INT NOT NULL, bateau INT NOT NULL, metro INT NOT NULL, date DATE NOT NULL, tramway INT NOT NULL, rer INT NOT NULL, id_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE trajets');
    }
}
