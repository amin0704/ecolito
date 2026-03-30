<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260328203627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trajets CHANGE id id DOUBLE PRECISION NOT NULL, CHANGE voiture voiture DOUBLE PRECISION NOT NULL, CHANGE train train DOUBLE PRECISION NOT NULL, CHANGE bus bus DOUBLE PRECISION NOT NULL, CHANGE avion avion DOUBLE PRECISION NOT NULL, CHANGE velo_mecanique velo_mecanique DOUBLE PRECISION NOT NULL, CHANGE velo_electrique velo_electrique DOUBLE PRECISION NOT NULL, CHANGE voiture_electrique voiture_electrique DOUBLE PRECISION NOT NULL, CHANGE moto moto DOUBLE PRECISION NOT NULL, CHANGE bateau bateau DOUBLE PRECISION NOT NULL, CHANGE metro metro DOUBLE PRECISION NOT NULL, CHANGE tramway tramway DOUBLE PRECISION NOT NULL, CHANGE rer rer DOUBLE PRECISION NOT NULL, CHANGE id_user id_user DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trajets CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE voiture voiture INT NOT NULL, CHANGE train train INT NOT NULL, CHANGE bus bus INT NOT NULL, CHANGE avion avion INT NOT NULL, CHANGE velo_mecanique velo_mecanique INT NOT NULL, CHANGE velo_electrique velo_electrique INT NOT NULL, CHANGE voiture_electrique voiture_electrique INT NOT NULL, CHANGE moto moto INT NOT NULL, CHANGE bateau bateau INT NOT NULL, CHANGE metro metro INT NOT NULL, CHANGE tramway tramway INT NOT NULL, CHANGE rer rer INT NOT NULL, CHANGE id_user id_user INT NOT NULL');
    }
}
