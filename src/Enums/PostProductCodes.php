<?php

namespace AlexanderPoellmann\LaravelPostPlc\Enums;

enum PostProductCodes: int
{
    case Retourpaket = 28;
    case RetourpaketInternational = 63;
    case PremiumLight = 14;
    case PremiumSelect = 30;
    case Kleinpaket = 12;
    case NextDay = 65;
    case PaketOesterreich = 10;
    case PaketPremiumInternational = 45;
    case CombiFreightOesterreich = 47;
    case CombiFreightInternational = 49;
    case PaketPremiumOesterreichB2B = 31;
    case PostExpressOesterreich = 01;
    case PostExpressInternational = 46;
    case PaeckchenMMitSendungsverfolgung = 78;
    case PaketPlusIntOutbound = 70;
    case PaketLightIntNonBoxableOutbound = 69;
    case Kleinpaket2000 = 96;
    case Kleinpaket2000Plus = 16;
}
