<?php

namespace App\Models;

use CodeIgniter\Model;
//inisialisasi dependensi untuk tangkap data postget
use CodeIgnitier\HTTP\RequestInterface;

class Assessment_model extends Model
{

    //membuat Variabel multi function dan turunannya
    protected $db;
    protected $request;

    public function __construct()
    {
        //inisialisasi koneksi database
        $this->db = \Config\Database::connect();

        $this->request = \Config\SerVices::request();
    }

    public function tampildata()
    {

        $query = $this->db->query("SELECT * FROM pasien");

        return $query->getResult();
    }

    public function tambahdata()
    {
        $body_id = $this->request->getPost('body_id');
        $org_unit_code = $this->request->getPost('org_unit_code');
        $pasien_diagnosa_id = $this->request->getPost('pasien_diagnosa_id');
        $diagnosa_id = $this->request->getPost('diagnosa_id');
        $no_registration = $this->request->getPost('no_registration');
        $visit_id = $this->request->getPost('visit_id');
        $bill_id = $this->request->getPost('bill_id');
        $clinic_id = $this->request->getPost('clinic_id');
        $class_room_id = $this->request->getPost('class_room_id');
        $bed_id = $this->request->getPost('bed_id');
        $in_date = $this->request->getPost('in_date');
        $exit_date = $this->request->getPost('exit_date');
        $keluar_id = $this->request->getPost('keluar_id');
        $examination_date = $this->request->getPost('examination_date');
        $temperature = $this->request->getPost('temperature');
        $tension_upper = $this->request->getPost('tension_upper');
        $tension_below = $this->request->getPost('tension_below');
        $nadi = $this->request->getPost('nadi');
        $nafas = $this->request->getPost('nafas');
        $weight = $this->request->getPost('weight');
        $height = $this->request->getPost('height');
        $arm_diameter = $this->request->getPost('arm_diameter');
        $anamnase = $this->request->getPost('anamnase');
        $pemeriksaan = $this->request->getPost('pemeriksaan');
        $teraphy_desc = $this->request->getPost('teraphy_desc');
        $instruction = $this->request->getPost('instruction');
        $medical_treatment = $this->request->getPost('medical_treatment');
        $employee_id = $this->request->getPost('employee_id');
        $description = $this->request->getPost('description');
        $modified_date = $this->request->getPost('modified_date');
        $modified_by = $this->request->getPost('modified_by');
        $modified_from = $this->request->getPost('modified_from');
        $status_pasien_id = $this->request->getPost('status_pasien_id');
        $ageyear = $this->request->getPost('ageyear');
        $agemonth = $this->request->getPost('agemonth');
        $ageday = $this->request->getPost('ageday');
        $thename = $this->request->getPost('thename');
        $theaddress = $this->request->getPost('theaddress');
        $theid = $this->request->getPost('theid');
        $isrj = $this->request->getPost('isrj');
        $gender = $this->request->getPost('gender');
        $doctor = $this->request->getPost('doctor');
        $kal_id = $this->request->getPost('kal_id');
        $petugas_id = $this->request->getPost('petugas_id');
        $petugas = $this->request->getPost('petugas');
        $account_id = $this->request->getPost('account_id');
        $saturasi = $this->request->getPost('saturasi');
        $alloanamnesis_contact = $this->request->getPost('alloanamnesis_contact');
        $alloanamnesis_result = $this->request->getPost('alloanamnesis_result');
        $alloanamnesis_hub = $this->request->getPost('alloanamnesis_hub');
        $diagnosa_desc = $this->request->getPost('diagnosa_desc');
        $diagnosa_history = $this->request->getPost('diagnosa_history');
        $diagnosa_kerja = $this->request->getPost('diagnosa_kerja');
        $diagnosa_banding = $this->request->getPost('diagnosa_banding');
        $riwayat_obat = $this->request->getPost('riwayat_obat');
        $riwayat_alergi = $this->request->getPost('riwayat_alergi');
        $t_01 = $this->request->getPost('t_01');
        $t_02 = $this->request->getPost('t_02');
        $t_03 = $this->request->getPost('t_03');
        $t_04 = $this->request->getPost('t_04');
        $t_05 = $this->request->getPost('t_05');
        $t_06 = $this->request->getPost('t_06');
        $t_07 = $this->request->getPost('t_07');
        $t_08 = $this->request->getPost('t_08');
        $t_09 = $this->request->getPost('t_09');
        $t_010 = $this->request->getPost('t_010');
        $t_011 = $this->request->getPost('t_011');
        $t_012 = $this->request->getPost('t_012');
        $t_013 = $this->request->getPost('t_013');
        $t_014 = $this->request->getPost('t_014');
        $t_015 = $this->request->getPost('t_015');
        $t_016 = $this->request->getPost('t_016');
        $t_017 = $this->request->getPost('t_017');
        $t_018 = $this->request->getPost('t_018');
        $t_019 = $this->request->getPost('t_019');
        $t_020 = $this->request->getPost('t_020');
        $t_021 = $this->request->getPost('t_021');
        $t_022 = $this->request->getPost('t_022');
        $t_023 = $this->request->getPost('t_023');
        $t_024 = $this->request->getPost('t_024');
        $t_025 = $this->request->getPost('t_025');
        $t_026 = $this->request->getPost('t_026');
        $t_027 = $this->request->getPost('t_027');
        $t_028 = $this->request->getPost('t_028');
        $t_029 = $this->request->getPost('t_029');
        $t_030 = $this->request->getPost('t_030');
        $t_031 = $this->request->getPost('t_031');
        $t_032 = $this->request->getPost('t_032');
        $t_033 = $this->request->getPost('t_033');
        $t_034 = $this->request->getPost('t_034');
        $t_035 = $this->request->getPost('t_035');
        $t_036 = $this->request->getPost('t_036');
        $t_037 = $this->request->getPost('t_037');
        $t_038 = $this->request->getPost('t_038');
        $t_039 = $this->request->getPost('t_039');
        $t_040 = $this->request->getPost('t_040');
        $t_041 = $this->request->getPost('t_041');
        $t_042 = $this->request->getPost('t_042');
        $t_043 = $this->request->getPost('t_043');
        $t_044 = $this->request->getPost('t_044');
        $t_045 = $this->request->getPost('t_045');
        $t_046 = $this->request->getPost('t_046');
        $t_047 = $this->request->getPost('t_047');
        $t_048 = $this->request->getPost('t_048');
        $t_049 = $this->request->getPost('t_049');
        $t_050 = $this->request->getPost('t_050');
        $v_01 = $this->request->getPost('v_01');
        $v_02 = $this->request->getPost('v_02');
        $v_03 = $this->request->getPost('v_03');
        $v_04 = $this->request->getPost('v_04');
        $v_05 = $this->request->getPost('v_05');
        $v_06 = $this->request->getPost('v_06');
        $v_07 = $this->request->getPost('v_07');
        $v_08 = $this->request->getPost('v_08');
        $v_09 = $this->request->getPost('v_09');
        $v_10 = $this->request->getPost('v_10');
        $v_11 = $this->request->getPost('v_11');
        $v_12 = $this->request->getPost('v_12');
        $v_13 = $this->request->getPost('v_13');
        $v_14 = $this->request->getPost('v_14');
        $v_15 = $this->request->getPost('v_15');
        $v_16 = $this->request->getPost('v_16');
        $v_17 = $this->request->getPost('v_17');
        $v_18 = $this->request->getPost('v_18');
        $v_19 = $this->request->getPost('v_19');
        $v_20 = $this->request->getPost('v_20');
        $v_21 = $this->request->getPost('v_21');
        $v_22 = $this->request->getPost('v_22');
        $v_23 = $this->request->getPost('v_23');
        $v_24 = $this->request->getPost('v_24');
        $v_25 = $this->request->getPost('v_25');
        $v_26 = $this->request->getPost('v_26');
        $v_27 = $this->request->getPost('v_27');
        $v_28 = $this->request->getPost('v_28');
        $v_29 = $this->request->getPost('v_29');
        $v_30 = $this->request->getPost('v_30');
        $v_31 = $this->request->getPost('v_31');
        $v_32 = $this->request->getPost('v_32');
        $v_33 = $this->request->getPost('v_33');
        $v_34 = $this->request->getPost('v_34');
        $v_35 = $this->request->getPost('v_35');
        $v_36 = $this->request->getPost('v_36');
        $v_37 = $this->request->getPost('v_37');
        $v_38 = $this->request->getPost('v_38');
        $v_39 = $this->request->getPost('v_39');
        $v_40 = $this->request->getPost('v_40');
        $v_41 = $this->request->getPost('v_41');
        $v_42 = $this->request->getPost('v_42');
        $v_43 = $this->request->getPost('v_43');
        $v_44 = $this->request->getPost('v_44');
        $v_45 = $this->request->getPost('v_45');
        $v_46 = $this->request->getPost('v_46');
        $v_47 = $this->request->getPost('v_47');
        $v_48 = $this->request->getPost('v_48');
        $v_49 = $this->request->getPost('v_49');
        $v_50 = $this->request->getPost('v_50');
        $assessment_type = $this->request->getPost('assessment_type');
        $treat_ = $this->request->getPost('treat_');
        $ttd = $this->request->getPost('ttd');
        $ttd_1 = $this->request->getPost('ttd_1');
        $ttd_2 = $this->request->getPost('ttd_2');
        $lokalis = $this->request->getPost('lokalis');
        $alloanamnesis_address = $this->request->getPost('alloanamnesis_address');
        $alloanamnesis_sex = $this->request->getPost('alloanamnesis_sex');
        $alloanamnesis_age = $this->request->getPost('alloanamnesis_age');
        $education_date = $this->request->getPost('education_date');
        $v_51 = $this->request->getPost('v_51');
        $v_52 = $this->request->getPost('v_52');
        $v_53 = $this->request->getPost('v_53');
        $v_54 = $this->request->getPost('v_54');
        $v_55 = $this->request->getPost('v_55');
        $v_56 = $this->request->getPost('v_56');
        $v_57 = $this->request->getPost('v_57');
        $v_58 = $this->request->getPost('v_58');
        $v_59 = $this->request->getPost('v_59');
        $v_60 = $this->request->getPost('v_60');
        $v_61 = $this->request->getPost('v_61');
        $v_62 = $this->request->getPost('v_62');
        $v_63 = $this->request->getPost('v_63');
        $v_64 = $this->request->getPost('v_64');
        $v_65 = $this->request->getPost('v_65');
        $v_66 = $this->request->getPost('v_66');
        $v_67 = $this->request->getPost('v_67');
        $v_68 = $this->request->getPost('v_68');
        $v_69 = $this->request->getPost('v_69');
        $v_70 = $this->request->getPost('v_70');
        $v_71 = $this->request->getPost('v_71');
        $v_72 = $this->request->getPost('v_72');
        $v_73 = $this->request->getPost('v_73');
        $v_74 = $this->request->getPost('v_74');
        $v_75 = $this->request->getPost('v_75');
        $v_76 = $this->request->getPost('v_76');
        $v_77 = $this->request->getPost('v_77');
        $v_78 = $this->request->getPost('v_78');
        $v_79 = $this->request->getPost('v_79');
        $v_80 = $this->request->getPost('v_80');
        $v_81 = $this->request->getPost('v_81');
        $v_82 = $this->request->getPost('v_82');
        $v_83 = $this->request->getPost('v_83');
        $v_84 = $this->request->getPost('v_84');
        $v_85 = $this->request->getPost('v_85');
        $v_86 = $this->request->getPost('v_86');
        $v_87 = $this->request->getPost('v_87');
        $v_88 = $this->request->getPost('v_88');
        $v_89 = $this->request->getPost('v_89');
        $v_90 = $this->request->getPost('v_90');
        $v_91 = $this->request->getPost('v_91');
        $v_92 = $this->request->getPost('v_92');
        $v_93 = $this->request->getPost('v_93');
        $v_94 = $this->request->getPost('v_94');
        $v_95 = $this->request->getPost('v_95');
        $v_96 = $this->request->getPost('v_96');
        $v_97 = $this->request->getPost('v_97');
        $v_98 = $this->request->getPost('v_98');
        $v_99 = $this->request->getPost('v_99');
        $v_100 = $this->request->getPost('v_100');
        $t_051 = $this->request->getPost('t_051');
        $t_052 = $this->request->getPost('t_052');
        $t_053 = $this->request->getPost('t_053');
        $t_054 = $this->request->getPost('t_054');
        $t_055 = $this->request->getPost('t_055');
        $t_056 = $this->request->getPost('t_056');
        $t_057 = $this->request->getPost('t_057');
        $t_058 = $this->request->getPost('t_058');
        $t_059 = $this->request->getPost('t_059');
        $t_060 = $this->request->getPost('t_060');
        $t_061 = $this->request->getPost('t_061');
        $t_062 = $this->request->getPost('t_062');
        $t_063 = $this->request->getPost('t_063');
        $t_064 = $this->request->getPost('t_064');
        $t_065 = $this->request->getPost('t_065');
        $t_066 = $this->request->getPost('t_066');
        $t_067 = $this->request->getPost('t_067');
        $t_068 = $this->request->getPost('t_068');
        $t_069 = $this->request->getPost('t_069');
        $t_070 = $this->request->getPost('t_070');
        $t_071 = $this->request->getPost('t_071');
        $t_072 = $this->request->getPost('t_072');
        $t_073 = $this->request->getPost('t_073');
        $t_074 = $this->request->getPost('t_074');
        $t_075 = $this->request->getPost('t_075');
        $t_076 = $this->request->getPost('t_076');
        $t_077 = $this->request->getPost('t_077');
        $t_078 = $this->request->getPost('t_078');
        $t_079 = $this->request->getPost('t_079');
        $t_080 = $this->request->getPost('t_080');
        $t_081 = $this->request->getPost('t_081');
        $t_082 = $this->request->getPost('t_082');
        $t_083 = $this->request->getPost('t_083');
        $t_084 = $this->request->getPost('t_084');
        $t_085 = $this->request->getPost('t_085');
        $t_086 = $this->request->getPost('t_086');
        $t_087 = $this->request->getPost('t_087');
        $t_088 = $this->request->getPost('t_088');
        $t_089 = $this->request->getPost('t_089');
        $t_090 = $this->request->getPost('t_090');
        $t_091 = $this->request->getPost('t_091');
        $t_092 = $this->request->getPost('t_092');
        $t_093 = $this->request->getPost('t_093');
        $t_094 = $this->request->getPost('t_094');
        $t_095 = $this->request->getPost('t_095');
        $t_096 = $this->request->getPost('t_096');
        $t_097 = $this->request->getPost('t_097');
        $t_098 = $this->request->getPost('t_098');
        $t_099 = $this->request->getPost('t_099');
        $t_100 = $this->request->getPost('t_100');


        $sql = "INSERT INTO test (body_id, org_unit_code, pasien_diagnosa_id, diagnosa_id, no_registration, visit_id, bill_id, clinic_id,  class_room_id, bed_id, in_date, exit_date, keluar_id, examination_date, temperature, tension_upper, tension_below, nadi, nafas, weight, height, arm_diameter, anamnase, pemeriksaan, teraphy_desc, instruction, medical_treatment, employee_id, description, modified_date, modified_by, modified_from, status_pasien_id, ageyear, agemonth, ageday, thename, theaddress, theid, isrj, gender, doctor, kal_id, petugas_id, petugas, account_id, saturasi, alloanamnesis_contact, alloanamnesis_result, alloanamnesis_hub, diagnosa_desc, diagnosa_history, diagnosa_kerja, diagnosa_banding, riwayat_obat, riwayat_alergi, assessment_type, treat_, ttd, ttd_1, ttd_2, lokalis, alloanamnesis_address, alloanamnesis_sex, alloanamnesis_age, education_date, t_01, t_02, t_03, t_04, t_05, t_06, t_07, t_08, t_09, t_010, t_011, t_012, t_013, t_014, t_015, t_016, t_017, t_018, t_019, t_020, t_021, t_022, t_023, t_024, t_025, t_026, t_027, t_028, t_029, t_030, t_031, t_032, t_033, t_034, t_035, t_036, t_037, t_038, t_039, t_040, t_041, t_042, t_043, t_044, t_045, t_046, t_047, t_048, t_049, t_050, v_01, v_02, v_03, v_04, v_05, v_06, v_07, v_08, v_09, v_10, v_11, v_12, v_13, v_14, v_15, v_16, v_17, v_18, v_19, v_20, v_21, v_22, v_23, v_24, v_25, v_26, v_27, v_28, v_29, v_30, v_31, v_32, v_33, v_34, v_35, v_36, v_37, v_38, v_39, v_40, v_41, v_42, v_43, v_44, v_45, v_46, v_47, v_48, v_49, v_50, v_51, v_52, v_53, v_54, v_55, v_56, v_57, v_58, v_59, v_60, v_61, v_62, v_63, v_64, v_65, v_66, v_67, v_68, v_69, v_70, v_71, v_72, v_73, v_74, v_75, v_76, v_77, v_78, v_79, v_80, v_81, v_82, v_83, v_84, v_85, v_86, v_87, v_88, v_89, v_90, v_91, v_92, v_93, v_94, v_95, v_96, v_97, v_98, v_99, v_100, t_051, t_052, t_053, t_054, t_055, t_056, t_057, t_058, t_059, t_060, t_061, t_062, t_063, t_064, t_065, t_066, t_067, t_068, t_069, t_070, t_071, t_072, t_073, t_074, t_075, t_076, t_077, t_078, t_079, t_080, t_081, t_082, t_083, t_084, t_085, t_086, t_087, t_088, t_089, t_090, t_091, t_092, t_093, t_094, t_095, t_096, t_097, t_098, t_099, t_100) VALUES ('$body_id', '$org_unit_code', '$pasien_diagnosa_id', '$diagnosa_id', '$no_registration', '$visit_id', '$bill_id', '$clinic_id', '$class_room_id', '$bed_id', '$in_date', '$exit_date', '$keluar_id', '$examination_date', '$temperature', '$tension_upper', '$tension_below', '$nadi', '$nafas', '$weight', '$height', '$arm_diameter', '$anamnase', '$pemeriksaan', '$teraphy_desc', '$instruction', '$medical_treatment', '$employee_id', '$description', '$modified_date', '$modified_by', '$modified_from', '$status_pasien_id', '$ageyear', '$agemonth', '$ageday', '$thename', '$theaddress', '$theid', '$isrj', '$gender', '$doctor', '$kal_id', '$petugas_id', '$petugas', '$account_id', '$saturasi', '$alloanamnesis_contact', '$alloanamnesis_result', '$alloanamnesis_hub', '$diagnosa_desc', '$diagnosa_history', '$diagnosa_kerja', '$diagnosa_banding', '$riwayat_obat', '$riwayat_alergi', '$assessment_type', '$treat_', '$ttd', '$ttd_1', '$ttd_2', '$lokalis', '$alloanamnesis_address', '$alloanamnesis_sex', '$alloanamnesis_age', '$education_date', '$t_01', '$t_02', '$t_03', '$t_04', '$t_05', '$t_06', '$t_07', '$t_08', '$t_09', '$t_010', '$t_011', '$t_012', '$t_013', '$t_014', '$t_015', '$t_016', '$t_017', '$t_018', '$t_019', '$t_020', '$t_021', '$t_022', '$t_023', '$t_024', '$t_025', '$t_026', '$t_027', '$t_028', '$t_029', '$t_030', '$t_031', '$t_032', '$t_033', '$t_034', '$t_035', '$t_036', '$t_037', '$t_038', '$t_039', '$t_040', '$t_041', '$t_042', '$t_043', '$t_044', '$t_045', '$t_046', '$t_047', '$t_048', '$t_049', '$t_050', '$v_01', '$v_02', '$v_03', '$v_04', '$v_05', '$v_06', '$v_07', '$v_08', '$v_09', '$v_10', '$v_11', '$v_12', '$v_13', '$v_14', '$v_15', '$v_16', '$v_17', '$v_18', '$v_19', '$v_20', '$v_21', '$v_22', '$v_23', '$v_24', '$v_25', '$v_26', '$v_27', '$v_28', '$v_29', '$v_30', '$v_31', '$v_32', '$v_33', '$v_34', '$v_35', '$v_36', '$v_37', '$v_38', '$v_39', '$v_40', '$v_41', '$v_42', '$v_43', '$v_44', '$v_45', '$v_46', '$v_47', '$v_48', '$v_49', '$v_50', '$v_51', '$v_52', '$v_53', '$v_54', '$v_55', '$v_56', '$v_57', '$v_58', '$v_59', '$v_60', '$v_61', '$v_62', '$v_63', '$v_64', '$v_65', '$v_66', '$v_67', '$v_68', '$v_69', '$v_70', '$v_71', '$v_72', '$v_73', '$v_74', '$v_75', '$v_76', '$v_77', '$v_78', '$v_79', '$v_80', '$v_81', '$v_82', '$v_83', '$v_84', '$v_85', '$v_86', '$v_87', '$v_88', '$v_89', '$v_90', '$v_91', '$v_92', '$v_93', '$v_94', '$v_95', '$v_96', '$v_97', '$v_98', '$v_99', '$v_100', '$t_051', '$t_052', '$t_053', '$t_054', '$t_055', '$t_056', '$t_057', '$t_058', '$t_059', '$t_060', '$t_061', '$t_062', '$t_063', '$t_064', '$t_065', '$t_066', '$t_067', '$t_068', '$t_069', '$t_070', '$t_071', '$t_072', '$t_073', '$t_074', '$t_075', '$t_076', '$t_077', '$t_078', '$t_079', '$t_080', '$t_081', '$t_082', '$t_083', '$t_084', '$t_085', '$t_086', '$t_087', '$t_088', '$t_089', '$t_090', '$t_091', '$t_092', '$t_093', '$t_094', '$t_095', '$t_096', '$t_097', '$t_098', '$t_099', '$t_100')";

        $this->db->query($sql);

        return;
    }
}
