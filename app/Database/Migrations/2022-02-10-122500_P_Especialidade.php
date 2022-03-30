<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class P_Especialidade extends Migration
{
    public function up()		 	
    {
        $this->forge->addField([
            'id_especialidade'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'especialidade'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);

        $this->forge->addKey('id_especialidade', true);
        $this->forge->createTable('p_especialidade', false);

        $this->db->query("INSERT INTO p_especialidade (especialidade) VALUES ('ADE'), ('ADM'), ('AER'), ('AES'), ('AEV'), ('AGC'), ('AGM'), ('AGR'), ('AL'), ('ALG'), ('ANE'), ('ANP'), ('ANS'), ('ANV'), ('AQT'), ('AQV'), ('ARM'), ('ASS'), ('AV'), ('BBA'), ('BCO'), ('BCT'), ('BEA'), ('BEI'), ('BEP'), ('BET'), ('BEV'), ('BFT'), ('BIB'), ('BIO'), ('BLG'), ('BLM'), ('BMA'), ('BMB'), ('BML'), ('BMN'), ('BMT'), ('BO'), ('BSP'), ('BST'), ('CAC'), ('CAP'), ('CAR'), ('CAT'), ('CAU'), ('CBM'), ('CCA'), ('CCO'), ('CCP'), ('CCT'), ('CGE'), ('CGO'), ('CGR'), ('CIV'), ('CLI'), ('CLM'), ('CMP'), ('COM'), ('CPE'), ('CPS'), ('CSO'), ('CTA'), ('CVP'), ('DENT'), ('DER'), ('DIR'), ('DNT'), ('DT'), ('ECO'), ('EF'), ('EFI'), ('ELE'), ('ELN'), ('ELT'), ('END'), ('ENF'), ('ENG'), ('ENT'), ('EST'), ('ETM'), ('EVG'), ('FAR'), ('FARM'), ('FCO'), ('FI'), ('FIS'), ('FON'), ('FOT'), ('FSU'), ('FT'), ('GDS'), ('GEN'), ('GEO'), ('GER'), ('GOB'), ('HEM'), ('HET'), ('HIS'), ('HOS'), ('IES'), ('IFM'), ('IFT'), ('IMP'), ('IND'), ('INF'), ('INF/R2'), ('ITS'), ('JOR'), ('LT'), ('MAM'), ('MAS'), ('MBM'), ('MCS'), ('MDM'), ('MDR'), ('MDS'), ('ME'), ('MEC'), ('MED'), ('MEM'), ('MET'), ('MFM'), ('MFS'), ('MGM'), ('MGS'), ('MHM'), ('MHS'), ('MIM'), ('MIS'), ('MLE'), ('MLI'), ('MLM'), ('MLS'), ('MMA'), ('MMM'), ('MMS'), ('MNM'), ('MNS'), ('MNU'), ('MOM'), ('MOS'), ('MQM'), ('MQS'), ('MRI'), ('MRM'), ('MRS'), ('MSM'), ('MSO'), ('MSS'), ('MTB'), ('MTL'), ('MTS'), ('MUG'), ('MUM'), ('MUS'), ('MXS'), ('Não declarada'), ('Não especificada'),('NE'), ('NEC'), ('NEF'), ('NER'), ('NEU'), ('NTE'), ('NUT'), ('O&M'), ('OFT'), ('ONC'), ('ONE'), ('OPE'), ('ORD'), ('ORL'), ('ORT'), ('PA'), ('PAS'), ('PCL'), ('PDI'), ('PDN'), ('PED'), ('PER'), ('PI'), ('PNE'), ('POE'), ('PRO'), ('PSC'), ('PSE'), ('PSI'), ('PSL'), ('PSO'), ('PUP'), ('QUI'), ('RAD'), ('RDE'), ('REP'), ('REU'), ('ROI'), ('RT'), ('SAD'), ('SAF'), ('SAI'), ('SAN'), ('SAP'), ('SAR'), ('SAU'), ('SBA'), ('SBO'), ('SCF'), ('SCO'), ('SDE'), ('SE'), ('SEF'), ('SEL'), ('SEM'), ('SGS'), ('SH'), ('SIA'), ('SIN'), ('SJU'), ('SLB'), ('SML'), ('SMU'), ('SNE'), ('SOB'), ('SPV'), ('SRD'), ('SSA'), ('SSG'), ('SSO'), ('SST'), ('STA'), ('STB'), ('STO'), ('STP'), ('SUP'), ('SVA'), ('SVE'), ('SVH'), ('SVI'), ('SVM'), ('TAD'), ('TAF'), ('TAR'), ('TBA'), ('TCM'), ('TCO'), ('TEE'), ('TEF'), ('TEL'), ('TES'), ('TET'), ('TIN'), ('TLB'), ('TMA'), ('TMT'), ('TMU'), ('TOB'), ('TOC'), ('TPV'), ('TRD'), ('TRR'), ('TSA'), ('TTP'), ('TVA'), ('URO'), ('VA'), ('VET'), ('ZOT')");
    }

    public function down()
    {
        $this->forge->dropTable('p_especialidade');
    }
}