<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260316111032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achats ADD television INT NOT NULL, ADD tshirt INT NOT NULL, ADD pantalon INT NOT NULL, ADD pull INT NOT NULL, DROP voiture, DROP vetement');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achats ADD voiture INT NOT NULL, ADD vetement INT NOT NULL, DROP television, DROP tshirt, DROP pantalon, DROP pull');
    }
}
