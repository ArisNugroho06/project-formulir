<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAssessment extends Model
{
    protected $table      = 'assessment_info';
    protected $primaryKey = 'no';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['form', 'body_id', 'org_unit_code', 'pasien_diagnosa_id', 'diagnosa_id', 'no_registration', 'visit_id', 'bill_id', 'clinic_id', 'class_room_id', 'bed_id', 'in_date', 'exit_date', 'keluar_id', 'examination_date', 'temperature', 'tension_upper', 'tension_below', 'nadi', 'nafas', 'weight', 'height', 'arm_diameter', 'anamnase', 'pemeriksaan', 'teraphy_desc', 'instruction', 'medical_treatment', 'employee_id', 'description', 'modified_date', 'modified_by', 'modified_from', 'status_pasien_id', 'ageyear', 'agemonth', 'ageday', 'thename', 'theaddress', 'theid', 'isrj', 'gender', 'doctor', 'kal_id', 'petugas_id', 'petugas', 'account_id', 'saturasi', 'alloanamnesis_contact', 'alloanamnesis_result', 'alloanamnesis_hub', 'diagnosa_desc', 'diagnosa_history', 'diagnosa_kerja', 'diagnosa_banding', 'riwayat_obat', 'riwayat_alergi', 'assessment_type', 'treat_image', 'ttd', 'ttd_1', 'ttd_2', 'ttd_3', 'ttd_4', 'ttd_5', 'lokalis', 'alloanamnesis_address', 'alloanamnesis_sex', 'alloanamnesis_age', 'education_date', 't_01', 't_02', 't_03', 't_04', 't_05', 't_06', 't_07', 't_08', 't_09', 't_010', 't_011', 't_012', 't_013', 't_014', 't_015', 't_016', 't_017', 't_018', 't_019', 't_020', 't_021', 't_022', 't_023', 't_024', 't_025', 't_026', 't_027', 't_028', 't_029', 't_030', 't_031', 't_032', 't_033', 't_034', 't_035', 't_036', 't_037', 't_038', 't_039', 't_040', 't_041', 't_042', 't_043', 't_044', 't_045', 't_046', 't_047', 't_048', 't_049', 't_050', 'v_01', 'v_02', 'v_03', 'v_04', 'v_05', 'v_06', 'v_07', 'v_08', 'v_09', 'v_10', 'v_11', 'v_12', 'v_13', 'v_14', 'v_15', 'v_16', 'v_17', 'v_18', 'v_19', 'v_20', 'v_21', 'v_22', 'v_23', 'v_24', 'v_25', 'v_26', 'v_27', 'v_28', 'v_29', 'v_30', 'v_31', 'v_32', 'v_33', 'v_34', 'v_35', 'v_36', 'v_37', 'v_38', 'v_39', 'v_40', 'v_41', 'v_42', 'v_43', 'v_44', 'v_45', 'v_46', 'v_47', 'v_48', 'v_49', 'v_50', 'v_51', 'v_52', 'v_53', 'v_54', 'v_55', 'v_56', 'v_57', 'v_58', 'v_59', 'v_60', 'v_61', 'v_62', 'v_63', 'v_64', 'v_65', 'v_66', 'v_67', 'v_68', 'v_69', 'v_70', 'v_71', 'v_72', 'v_73', 'v_74', 'v_75', 'v_76', 'v_77', 'v_78', 'v_79', 'v_80', 'v_81', 'v_82', 'v_83', 'v_84', 'v_85', 'v_86', 'v_87', 'v_88', 'v_89', 'v_90', 'v_91', 'v_92', 'v_93', 'v_94', 'v_95', 'v_96', 'v_97', 'v_98', 'v_99', 'v_100', 't_051', 't_052', 't_053', 't_054', 't_055', 't_056', 't_057', 't_058', 't_059', 't_060', 't_061', 't_062', 't_063', 't_064', 't_065', 't_066', 't_067', 't_068', 't_069', 't_070', 't_071', 't_072', 't_073', 't_074', 't_075', 't_076', 't_077', 't_078', 't_079', 't_080', 't_081', 't_082', 't_083', 't_084', 't_085', 't_086', 't_087', 't_088', 't_089', 't_090', 't_091', 't_092', 't_093', 't_094', 't_095', 't_096', 't_097', 't_098', 't_099', 't_100'];


    public function getDataByValue($value)
    {
        return $this->where('form', $value)->findAll();
    }

    public function generate_id()
    {
        $prefix = 'BODY';
        $date = new \DateTime('now', new \DateTimeZone('Asia/Jakarta'));
        $date = date('YmdHis');
        $random_number = rand(1000, 9999);
        $id = $prefix . $date . $random_number;
        return $id;
    }

    public function hitungtotalF1()
    {
        return $this->where('FORM', 'F1')->countAllResults();
    }

    public function hitungtotalF2()
    {
        return $this->where('FORM', 'F2')->countAllResults();
    }

    public function hitungtotalF3()
    {
        return $this->where('FORM', 'F3')->countAllResults();
    }

    public function hitungtotalF4()
    {
        return $this->where('FORM', 'F4')->countAllResults();
    }

    public function hitungtotalF5()
    {
        return $this->where('FORM', 'F5')->countAllResults();
    }

    public function hitungtotalF6()
    {
        return $this->where('FORM', 'F6')->countAllResults();
    }

    public function hitungtotalF7()
    {
        return $this->where('FORM', 'F7')->countAllResults();
    }

    public function search($keyword)
    {

        return $this->table('assessment_info')->like('no_registration', $keyword)->orLike('thename', $keyword);
    }
}
