<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260402173017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achats ADD infos LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE conso_aliments ADD infos LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE trajets ADD infos LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conso_aliments DROP infos');
        $this->addSql('ALTER TABLE trajets DROP infos');
        $this->addSql('ALTER TABLE achats DROP infos');
    }
}
