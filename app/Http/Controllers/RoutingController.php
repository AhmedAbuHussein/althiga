<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoutingController extends Controller
{
    public function WPRRegistrationDownload()
    {
        return Storage::download('files/Registration-terms-and-conditions_V.2.docx');
    }

    public function routing($PageName = '')
    {
        switch ($PageName) {
            case 'about-us':
                return view('about-us');
                break;

            case 'contact-us':
                return view('contact-us');
                break;

            case 'virtual-tour':
                return view('virtual-tour');
                break;

            case 'services':
                return view('services');
                break;

            case 'pictures-for-courses':
                return view('pictures-for-courses');
                break;

                // case 'governmental-registrations':
                //     return view('governmental-registrations');
                //     break;

            case 'accreditations-partnerships':
                return view('accreditations-partnerships');
                break;

            case 'valuable-customers':
                return view('valuable-customers');
                break;

            case 'aramco-wpr':
                return view('aramco-wpr');
                break;

            case 'courses-schedule':
                return view('courses-schedule');
                break;

            case 'osh-courses':
                return view('osh-courses');
                break;

            case 'financial-admin-courses':
                return view('financial-admin-courses');
                break;

            case 'osh-principles-general-industries':
                return view('osh-courses.osh-principles-general-industries');
                break;

            case 'osh-principles-constructions':
                return view('osh-courses.osh-principles-constructions');
                break;

            case 'safety-in-administrative-buildings':
                return view('osh-courses.safety-in-administrative-buildings');
                break;

            case 'managing-emergency-and-crisis-plans':
                return view('osh-courses.managing-emergency-and-crisis-plans');
                break;

            case 'osh-management-in-work-environment':
                return view('osh-courses.osh-management-in-work-environment');
                break;

            case 'sms':
                return view('osh-courses.sms');
                break;

            case 'safety-in-enclosed-or-confined-spaces':
                return view('osh-courses.safety-in-enclosed-or-confined-spaces');
                break;

            case 'safety-and-protection-in-hospitals':
                return view('osh-courses.safety-and-protection-in-hospitals');
                break;

            case 'defensive-driving':
                return view('osh-courses.defensive-driving');
                break;

            case 'safety-team-member-refreshment':
                return view('osh-courses.safety-team-member-refreshment');
                break;

            case 'safety-team-manager-refreshment':
                return view('osh-courses.safety-team-manager-refreshment');
                break;

            case 'occupational-safety-officer-safety-manager':
                return view('osh-courses.occupational-safety-officer-safety-manager');
                break;

            case 'skills-of-security-and-safety-of-facilities':
                return view('osh-courses.skills-of-security-and-safety-of-facilities');
                break;

            case 'safety-observer-in-accordance-with-approved-regulations':
                return view('osh-courses.safety-observer-in-accordance-with-approved-regulations');
                break;

            case 'financial-admin-courses':
                return view('financial-admin-courses');
                break;

            case 'strategic-planning':
                return view('financial-admin-courses.strategic-planning');
                break;

            case 'how-to-write-your-project':
                return view('financial-admin-courses.how-to-write-your-project');
                break;

            case 'managing-human-crowds':
                return view('financial-admin-courses.managing-human-crowds');
                break;

            case 'crisis-management':
                return view('financial-admin-courses.crisis-management');
                break;

            case 'time-management':
                return view('financial-admin-courses.time-management');
                break;

            case 'the-art-of-dealing-with-customer-complaints-and-objections':
                return view('financial-admin-courses.the-art-of-dealing-with-customer-complaints-and-objections');
                break;

            case 'sales-and-marketing':
                return view('financial-admin-courses.sales-and-marketing');
                break;

            case 'hr-management':
                return view('financial-admin-courses.hr-management');
                break;

            case 'the-art-of-customer-service':
                return view('financial-admin-courses.the-art-of-customer-service');
                break;

            case 'traits-of-successful-leadership':
                return view('financial-admin-courses.traits-of-successful-leadership');
                break;

            case 'economic-feasibility-studies':
                return view('financial-admin-courses.economic-feasibility-studies');
                break;

            case 'financial-analysis-using-financial-ratios':
                return view('financial-admin-courses.financial-analysis-using-financial-ratios');
                break;

            case 'accounting-for-nonaccountants':
                return view('financial-admin-courses.accounting-for-nonaccountants');
                break;

            case 'env-foodSafety-courses':
                return view('env-foodSafety-courses');
                break;

            case 'food-management-and-safety-system-first-reviewer-iso22000':
                return view('env-foodSafety-courses.food-management-and-safety-system-first-reviewer-iso22000');
                break;

            default:
                return view('welcome');
                break;
        }
    }
}
