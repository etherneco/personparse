<?php 

namespace App\Parse;

class Dictionary {
     /**
     * Dictionary
     *  - Common honorific prefixes 
     *  - Common compound surname identifiers
     *  - Common suffixes 
     */
    
    protected static $dictionary = array(
        'prefix' => array(
            'Mr.' => array('mr', 'mister', 'master'),
            'Mrs.' => array('mrs', 'missus', 'missis'),
            'Ms.' => array('ms', 'miss'),
            'Dr.' => array('dr'),
            'Rev.' => array("rev", "rev'd", "reverend"),
            'Fr.' => array('fr', 'father'),
            'Sr.' => array('sr', 'sister'),
            'Prof.' => array('prof', 'professor'),
            'Sir' => array('sir'),
            'Hon.' => array('honorable'),
            'Pres.' => array('president'),
            'Gov' => array('governor', 'governer'),
            'Ofc' => array('officer'),
            'Msgr' => array('monsignor'),
            'Sr.' => array('sister'),
            'Br.' => array('brother'),
            'Supt.' => array('superintendent'),
            'Rep.' => array('representatitve'),
            'Sen.' => array('senator'),
            'Amb.' => array('ambassador'),
            'Treas.' => array('treasurer'),
            'Sec.' => array('secretary'),
            'Pvt.' => array('private'),
            'Cpl.' => array('corporal'),
            'Sgt.' => array('sargent'),
            'Adm.' => array('administrative', 'administrator', 'administrater'),
            'Maj.' => array('major'),
            'Capt.' => array('captain'),
            'Cmdr.' => array('commander'),
            'Lt.' => array('lieutenant'),
            'Lt. Col.' => array('lieutenant colonel'),
            'Col.' => array('colonel'),
            'Gen.' => array('general'),
            'Bc.' => array('bachelor', 'baccalaureus'),
            'BcA.' => array('bachelor of arts', 'baccalaureus artis'),
            'ICDr.' => array('doctor of canon law', 'juris cononici doctor'),
            'Ing.' => array('engineer', 'ingenieur'),
            'Ing. sheet.' => array('architect engineer', 'intrudes upon architectus'),
            'JUDr.' => array('juris doctor utriusque', 'doctor rights'),
            'MDDr.' => array('doctor of dental medicine', 'medicinae doctor dentium'),
            'MgA.' => array('master of arts', 'magister artis'),
            'Mgr.' => array('master'),
            'MD.' => array('doctor of general medicine'),
            'DVM.' => array('doctor of veterinary medine'),
            'PaedDr.' => array('doctor of education'),
            'PharmDr.' => array('doctor of pharmacy'),
            'PhDr.' => array('doctor of philosophy'),
            'PhMr.' => array('master of pharmacy'),
            'RCDr.' => array('doctor of business studies'),
            'RNDr.' => array('doctor of science'),
            'DSc.' => array('doctor of science'),
            'RSDr.' => array('doctor of socio-political sciences'),
            'RTDr.' => array('doctor of technical sciences'),
            'ThDr.' => array('doctor of theology'),
            'Th.D.' => array('doctor of theology'),
            'ThLic.' => array('licentiate of theology'),
            'ThMgr.' => array('master of theology', 'master of divinity'),
            'Acad.' => array('academian', 'academic'),
            'ArtD.' => array('doctor of arts'),
            'DiS.' => array('certified specialist'),
            'As.' => array('assistant'),
            'Odb. As.' => array('assistant professor'),
            'Doc.' => array('associate professor'),
            ' ' => array('the')
        ),
        'compound' => array('da', 'de', 'del', 'della', 'dem', 'den', 'der', 'di', 'du', 'het', 'la', 'onder', 'op', 'pietro', 'st.', 'st', '\'t', 'ten', 'ter', 'van', 'vanden', 'vere', 'von'),
        'suffixes' => array(
            'line' => array('I', 'II', 'III', 'IV', 'V', '1st', '2nd', '3rd', '4th', '5th', 'Senior', 'Junior', 'Jr', 'Sr'),
            'prof' => array('AO', 'B.A.', 'M.Sc', 'BCompt', 'PhD', 'Ph.D.', 'APR', 'RPh', 'PE', 'MD', 'M.D.', 'MA', 'DMD', 'CME', 'BSc', 'Bsc', 'BSc(hons)', 'Ph.D.', 'BEng', 'M.B.A.', 'MBA', 'FAICD', 'CM', 'OBC', 'M.B.', 'ChB', 'FRCP', 'FRSC',
                'FREng', 'Esq', 'MEng', 'MSc', 'J.D.', 'JD', 'BGDipBus', 'Dip', 'Dipl.Phys', 'M.H.Sc.', 'MPA', 'B.Comm', 'B.Eng', 'B.Acc', 'FSA', 'PGDM', 'FCPA', 'RN', 'R.N.', 'MSN',
                'PCA', 'PCCRM', 'PCFP', 'PCGD', 'PCHR', 'PCM', 'PCPS', 'PCPM', 'PCSCM', 'PCSM', 'PCMM', 'PCTC', 'ACA', 'FCA', 'ACMA', 'FCMA', 'AAIA', 'FAIA', 'CCC', 'MIPA', 'FIPA', 'CIA', 'CFE', 'CISA', 'CFAP',
                'QC', 'Q.C.', 'M.Tech', 'CTA', 'C.I.M.A.', 'B.Ec',
                'CFIA', 'ICCP', 'CPS', 'CAP-OM', 'CAPTA', 'TNAOAP', 'AFA', 'AVA', 'ASA', 'CAIA', 'CBA', 'CVA', 'ICVS', 'CIIA', 'CMU', 'PFM', 'PRM', 'CFP', 'CWM', 'CCP', 'EA', 'CCMT', 'CGAP', 'CDFM', 'CFO', 'CGFM', 'CGAT', 'CGFO', 'CMFO', 'CPFO', 'CPFA',
                'BMD', 'BIET', 'P.Eng', 'PE', 'MBBS', 'MB', 'BCh', 'BAO', 'BMBS', 'MBBChir', 'MBChBa', 'MPhil', 'LL.D', 'LLD', 'D.Lit', 'DEA', 'DESS', 'DClinPsy', 'DSc', 'MRes', 'M.Res', 'Psy.D', 'Pharm.D',
                'BA(Admin)', 'BAcc', 'BACom', 'BAdmin', 'BAE', 'BAEcon', 'BA(Ed)', 'BA(FS)', 'BAgr', 'BAH', 'BAI', 'BAI(Elect)', 'BAI(Mech)', 'BALaw', 'BAO', 'BAppSc', 'BArch', 'BArchSc', 'BARelSt', 'BASc', 'BASoc', 'DDS', 'D.D.S.',
                'BASS', 'BATheol', 'BBA', 'BBLS', 'BBS', 'BBus', 'BChem', 'BCJ', 'BCL', 'BCLD(SocSc)', 'BClinSci', 'BCom', 'BCombSt', 'BCommEdCommDev', 'BComp', 'BComSc', 'BCoun', 'BD', 'BDes', 'BE', 'BEcon', 'BEcon&Fin', 'M.P.P.M.', 'MPPM',
                'BEconSci', 'BEd', 'BEng', 'BES', 'BEng(Tech)', 'BFA', 'BFin', 'BFLS', 'BFST', 'BH', 'BHealthSc', 'BHSc', 'BHy', 'BJur', 'BL', 'BLE', 'BLegSc', 'BLib', 'BLing', 'BLitt', 'BLittCelt', 'BLS', 'BMedSc', 'BMet',
                'BMid', 'BMin', 'BMS', 'BMSc', 'BMSc', 'BMS', 'BMus', 'BMusEd', 'BMusPerf', 'BN', 'BNS', 'BNurs', 'BOptom', 'BPA', 'BPharm', 'BPhil', 'TTC', 'DIP', 'Tchg', 'BEd', 'MEd', 'ACIB', 'FCIM', 'FCIS', 'FCS', 'Fcs',
                'Bachelor', 'O.C.', 'JP', 'C.Eng', 'C.P.A.', 'B.B.S.', 'MBE', 'GBE', 'KBE', 'DBE', 'CBE', 'OBE', 'MRICS', 'D.P.S.K.', 'D.P.P.J.', 'DPSK', 'DPPJ', 'B.B.A.', 'GBS', 'MIGEM', 'M.I.G.E.M.', 'FCIS',
                'BPhil(Ed)', 'BPhys', 'BPhysio', 'BPl', 'BRadiog', 'BSc', 'B.Sc', 'BScAgr', 'BSc(Dairy)', 'BSc(DomSc)', 'BScEc', 'BScEcon', 'BSc(Econ)', 'BSc(Eng)', 'BScFor', 'BSc(HealthSc)', 'BSc(Hort)', 'BBA', 'B.B.A.',
                'BSc(MCRM)', 'BSc(Med)', 'BSc(Mid)', 'BSc(Min)', 'BSc(Psych)', 'BSc(Tech)', 'BSD', 'BSocSc', 'BSS', 'BStSu', 'BTchg', 'BTCP', 'BTech', 'BTechEd', 'BTh', 'BTheol', 'BTS', 'EdB', 'LittB', 'LLB', 'MA', 'MusB', 'ScBTech',
                'CEng', 'FCA', 'CFA', 'Cfa', 'C.F.A.', 'LLB', 'LL.B', 'LLM', 'LL.M', 'CA(SA)', 'C.A.', 'CA', 'CPA', 'Solicitor', 'DMS', 'FIWO', 'CEnv', 'MICE', 'MIWEM', 'B.Com', 'BCom', 'BAcc', 'BA', 'BEc', 'MEc', 'HDip', 'B.Bus.', 'E.S.C.P.')
        ),
        'vowels' => array('a', 'e', 'i', 'o', 'u')
    );

    public static function getDictionary(){
        return self::$dictionary;
    }
    
}
