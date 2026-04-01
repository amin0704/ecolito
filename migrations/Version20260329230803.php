<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260329230803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achats (id INT AUTO_INCREMENT NOT NULL, smartphone INT NOT NULL, tablette INT NOT NULL, television INT NOT NULL, electromenager INT NOT NULL, velo_mecanique INT NOT NULL, velo_electrique INT NOT NULL, achat_en_livraison INT NOT NULL, cosmetique INT NOT NULL, tshirt INT NOT NULL, chaussures INT NOT NULL, jean INT NOT NULL, manteau INT NOT NULL, veste INT NOT NULL, pantalon INT NOT NULL, pull INT NOT NULL, livre INT NOT NULL, journal INT NOT NULL, date DATE NOT NULL, iduser INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conso_aliments (id INT AUTO_INCREMENT NOT NULL, poulet DOUBLE PRECISION NOT NULL, boeuf DOUBLE PRECISION NOT NULL, fromage DOUBLE PRECISION NOT NULL, pates DOUBLE PRECISION NOT NULL, riz DOUBLE PRECISION NOT NULL, oeufs DOUBLE PRECISION NOT NULL, pommedeterre DOUBLE PRECISION NOT NULL, salade DOUBLE PRECISION NOT NULL, tomate DOUBLE PRECISION NOT NULL, oignons DOUBLE PRECISION NOT NULL, pomme DOUBLE PRECISION NOT NULL, poire DOUBLE PRECISION NOT NULL, orange DOUBLE PRECISION NOT NULL, raisin DOUBLE PRECISION NOT NULL, cafe DOUBLE PRECISION NOT NULL, lait DOUBLE PRECISION NOT NULL, date DATE NOT NULL, id_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, recipe_id INT NOT NULL, name VARCHAR(255) NOT NULL, quantity DOUBLE PRECISION NOT NULL, unit VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_6BAF787059D8A214 (recipe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, steps LONGTEXT NOT NULL, preparation_time INT NOT NULL, difficulty VARCHAR(20) NOT NULL, is_published TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trajets (id INT AUTO_INCREMENT NOT NULL, voiture DOUBLE PRECISION NOT NULL, train DOUBLE PRECISION NOT NULL, bus DOUBLE PRECISION NOT NULL, avion DOUBLE PRECISION NOT NULL, velo_mecanique DOUBLE PRECISION NOT NULL, velo_electrique DOUBLE PRECISION NOT NULL, voiture_electrique DOUBLE PRECISION NOT NULL, moto DOUBLE PRECISION NOT NULL, bateau DOUBLE PRECISION NOT NULL, metro DOUBLE PRECISION NOT NULL, date DATE NOT NULL, tramway DOUBLE PRECISION NOT NULL, rer DOUBLE PRECISION NOT NULL, id_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ingredient ADD CONSTRAINT FK_6BAF787059D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredient DROP FOREIGN KEY FK_6BAF787059D8A214');
        $this->addSql('DROP TABLE achats');
        $this->addSql('DROP TABLE conso_aliments');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE recipe');
        $this->addSql('DROP TABLE trajets');
        $this->addSql('DROP TABLE user');
    }
}
