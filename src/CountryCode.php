<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum CountryCode: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case AD = '+376';
    case AE = '+971';
    case AF = '+93';
    case AG = '+1268';
    case AI = '+1264';
    case AL = '+355';
    case AM = '+374';
    case AN = '+599';
    case AO = '+244';
    case AQ = '+672';
    case AR = '+54';
    case AS = '+1684';
    case AT = '+43';
    case AU = '+61';
    case AW = '+297';
    case AZ = '+994';
    case BA = '+387';
    case BB = '+1246';
    case BD = '+880';
    case BE = '+32';
    case BF = '+226';
    case BG = '+359';
    case BH = '+973';
    case BI = '+257';
    case BJ = '+229';
    case BM = '+1441';
    case BN = '+673';
    case BO = '+591';
    case BR = '+55';
    case BS = '+1242';
    case BT = '+975';
    case BW = '+267';
    case BY = '+375';
    case BZ = '+501';
    case CD = '+243';
    case CF = '+236';
    case CG = '+242';
    case CH = '+41';
    case CI = '+225';
    case CK = '+682';
    case CL = '+56';
    case CM = '+237';
    case CN = '+86';
    case CO = '+57';
    case CR = '+506';
    case CU = '+53';
    case CV = '+238';
    case CY = '+357';
    case CZ = '+420';
    case DE = '+49';
    case DJ = '+253';
    case DK = '+45';
    case DM = '+1767';
    case DO = '+1849';
    case DZ = '+213';
    case EC = '+593';
    case EE = '+372';
    case EG = '+20';
    case ER = '+291';
    case ES = '+34';
    case ET = '+251';
    case FI = '+358';
    case FJ = '+679';
    case FM = '+691';
    case FO = '+298';
    case FR = '+33';
    case GA = '+241';
    case GB = '+44';
    case GD = '+1473';
    case GE = '+995';
    case GF = '+594';
    case GH = '+233';
    case GI = '+350';
    case GL = '+299';
    case GM = '+220';
    case GN = '+224';
    case GP = '+590';
    case GQ = '+240';
    case GR = '+30';
    case GS = '+500';
    case GT = '+502';
    case GU = '+1671';
    case GW = '+245';
    case GY = '+595';
    case HK = '+852';
    case HN = '+504';
    case HR = '+385';
    case HT = '+509';
    case HU = '+36';
    case ID = '+62';
    case IE = '+353';
    case IL = '+972';
    case IN = '+91';
    case IO = '+246';
    case IQ = '+964';
    case IR = '+98';
    case IS = '+354';
    case IT = '+39';
    case JM = '+1876';
    case JO = '+962';
    case JP = '+81';
    case KE = '+254';
    case KG = '+996';
    case KH = '+855';
    case KI = '+686';
    case KM = '+269';
    case KN = '+1869';
    case KP = '+850';
    case KR = '+82';
    case KW = '+965';
    case KY = '+ 345';
    case KZ = '+77';
    case LA = '+856';
    case LB = '+961';
    case LC = '+1758';
    case LI = '+423';
    case LK = '+94';
    case LR = '+231';
    case LS = '+266';
    case LT = '+370';
    case LU = '+352';
    case LV = '+371';
    case LY = '+218';
    case MA = '+212';
    case MC = '+377';
    case MD = '+373';
    case ME = '+382';
    case MG = '+261';
    case MH = '+692';
    case MK = '+389';
    case ML = '+223';
    case MM = '+95';
    case MN = '+976';
    case MO = '+853';
    case MP = '+1670';
    case MQ = '+596';
    case MR = '+222';
    case MS = '+1664';
    case MT = '+356';
    case MU = '+230';
    case MV = '+960';
    case MW = '+265';
    case MX = '+52';
    case MY = '+60';
    case MZ = '+258';
    case NA = '+264';
    case NC = '+687';
    case NE = '+227';
    case NG = '+234';
    case NI = '+505';
    case NL = '+31';
    case NO = '+47';
    case NP = '+977';
    case NR = '+674';
    case NU = '+683';
    case NZ = '+64';
    case OM = '+968';
    case PA = '+507';
    case PE = '+51';
    case PF = '+689';
    case PG = '+675';
    case PH = '+63';
    case PK = '+92';
    case PL = '+48';
    case PM = '+508';
    case PN = '+872';
    case PR = '+1939';
    case PS = '+970';
    case PT = '+351';
    case PW = '+680';
    case QA = '+974';
    case RE = '+262';
    case RO = '+40';
    case RS = '+381';
    case RU = '+7';
    case RW = '+250';
    case SA = '+966';
    case SB = '+677';
    case SC = '+248';
    case SD = '+249';
    case SE = '+46';
    case SG = '+65';
    case SH = '+290';
    case SI = '+386';
    case SK = '+421';
    case SL = '+232';
    case SM = '+378';
    case SN = '+221';
    case SO = '+252';
    case SR = '+597';
    case SS = '+211';
    case ST = '+239';
    case SV = '+503';
    case SY = '+963';
    case SZ = '+268';
    case TC = '+1649';
    case TD = '+235';
    case TG = '+228';
    case TH = '+66';
    case TJ = '+992';
    case TK = '+690';
    case TL = '+670';
    case TM = '+993';
    case TN = '+216';
    case TO = '+676';
    case TR = '+90';
    case TT = '+1868';
    case TV = '+688';
    case TW = '+886';
    case TZ = '+255';
    case UA = '+380';
    case UG = '+256';
    case US = '+1';
    case UY = '+598';
    case UZ = '+998';
    case VA = '+379';
    case VC = '+1784';
    case VE = '+58';
    case VG = '+1284';
    case VI = '+1340';
    case VN = '+84';
    case VU = '+678';
    case WF = '+681';
    case WS = '+685';
    case YE = '+967';
    case ZA = '+27';
    case ZM = '+260';
    case ZW = '+263';

    /**
     * Retrieve the code for the given country.
     *
     * @param  \AllDressed\Constants\Country  $country
     * @return static
     */
    public static function forCountry(Country $country): static
    {
        return match ($country) {
            Country::ALAND_ISLANDS => static::FI,
            Country::CANADA => static::US,
            Country::CHRISTMAS_ISLAND => static::AU,
            Country::COCOS_KEELING_ISLANDS => static::AU,
            Country::FALKLAND_ISLANDS_MALVINAS => static::GS,
            Country::GUERNSEY => static::GB,
            Country::ISLE_OF_MAN => static::GB,
            Country::JERSEY => static::GB,
            Country::MAYOTTE => static::RE,
            Country::NORFOLK_ISLAND => static::AQ,
            Country::PARAGUAY => static::GY,
            Country::SAINT_BARTHELEMY => static::GP,
            Country::SAINT_MARTIN => static::GP,
            Country::SVALBARD_AND_JAN_MAYEN => static::NO,

            default => static::all()->get($country->value),
        };
    }

    /**
     * Retrieve the country of the code.
     *
     * @return \AllDressed\Constants\Country
     */
    public function getCountry(): Country
    {
        return Country::from($this->name);
    }
}
