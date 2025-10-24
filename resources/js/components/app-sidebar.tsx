import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { dashboard } from '@/routes';
import { type NavItem, type NavGroup } from '@/types';
import { Link } from '@inertiajs/react';
import { BookOpen, Folder, LayoutGrid } from 'lucide-react';
import AppLogo from './app-logo';

const mainNavItems: NavItem[] = [
    {
        title: 'Home',
        href: dashboard(),
        icon: LayoutGrid,
    },
];

const accountNavGroup: NavGroup = {
    title: 'Account Receivables',
    items: [
            {
                title: 'Payment Report',
                href: dashboard(),
                icon: LayoutGrid,
            },
            {
                title: 'Online Payment Center',
                href: dashboard(),
                icon: LayoutGrid,
            },
    ],
};

const studentInformationNavGroup: NavGroup = {
    title: 'Student Information',
    items: [
            {
                title: 'Student Profile',
                href: dashboard(),
                icon: LayoutGrid,
            },
            {
                title: 'Student Ledger',
                href: dashboard(),
                icon: LayoutGrid,
            },
    ],
};

const enrollmentNavGroup: NavGroup = {
    title: 'Enrollment Support',
    items: [
            {
                title: 'College Self Enrollment',
                href: dashboard(),
                icon: LayoutGrid,
            },
            {
                title: 'Display Class Schedule',
                href: dashboard(),
                icon: LayoutGrid,
            },
            {
                title: 'Subject Schedule Inquiry',
                href: dashboard(),
                icon: LayoutGrid,
            },
            {
                title: 'Basic Education Enrollment',
                href: dashboard(),
                icon: LayoutGrid,
            },
    ],
};

const studentServicesNavGroup: NavGroup = {
    title: 'Student Services',
    items: [
        {
            title: 'Faculty Evaluation',
            href: dashboard(),
            icon: LayoutGrid,
        },
    ],
};

const studentPerformanceNavGroup: NavGroup = {
    title: 'Student Performance',
    items: [
            {
                title: 'Display Grades',
                href: dashboard(),
                icon: LayoutGrid,
            },
            {
                title: 'Display Class Records',
                href: dashboard(),
                icon: LayoutGrid,
            },
    ],
};

const librarySupportNavGroup: NavGroup = {
    title: 'Library Support',
    items: [
        {
            title: 'Online Public Access Catalog',
            href: dashboard(),
            icon: LayoutGrid,
        },
    ],
};

const utilitiesNavGroup: NavGroup = {
    title: 'Utilities',
    items: [
        {
            title: 'Change Password',
            href: dashboard(),
            icon: LayoutGrid,
        },
    ],
};

const footerNavItems: NavItem[] = [
    {
        title: 'Repository',
        href: 'https://github.com/laravel/react-starter-kit',
        icon: Folder,
    },
    {
        title: 'Documentation',
        href: 'https://laravel.com/docs/starter-kits#react',
        icon: BookOpen,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href={dashboard()} prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain items={mainNavItems} groups={[accountNavGroup, studentInformationNavGroup, enrollmentNavGroup, studentServicesNavGroup, studentPerformanceNavGroup, librarySupportNavGroup, utilitiesNavGroup]} />
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}
