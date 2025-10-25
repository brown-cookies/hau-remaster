import {
    SidebarGroup,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { resolveUrl } from '@/lib/utils';
import { type NavItem, type NavGroup } from '@/types';
import { Link, usePage } from '@inertiajs/react';
import { ChevronDown } from 'lucide-react';
import {
  Collapsible,
  CollapsibleContent,
  CollapsibleTrigger,
} from "@/components/ui/collapsible"

export function NavMain({ items = [], groups = [] }: { items: NavItem[], groups: NavGroup[] }) {
    const page = usePage();

    return (
        <>
            <SidebarGroup className="px-2 py-0">
                <SidebarGroupLabel>Platform</SidebarGroupLabel>
                <SidebarMenu>
                    {items.map((item) => (
                        <SidebarMenuItem key={item.title}>
                            <SidebarMenuButton
                                asChild
                                isActive={page.url.startsWith(
                                    resolveUrl(item.href),
                                )}
                                tooltip={{ children: item.title }}
                            >
                                <Link href={item.href} prefetch>
                                    {item.icon && <item.icon />}
                                    <span>{item.title}</span>
                                </Link>
                            </SidebarMenuButton>
                        </SidebarMenuItem>
                    ))}
                </SidebarMenu>
            </SidebarGroup>
            {groups.map((group) => (
                <Collapsible  className="group/collapsible">
                    <SidebarGroup className='px-2 py-0'>
                        <SidebarGroupLabel asChild>

                            <CollapsibleTrigger>
                                {group.title}
                                <ChevronDown className="ml-auto transition-transform group-data-[state=open]/collapsible:rotate-180" />
                            </CollapsibleTrigger>

                        </SidebarGroupLabel>

                        <CollapsibleContent>
                            <SidebarMenu>
                                {group.items.map((item) => {
                                    return (
                                        <SidebarMenuItem key={item.title}>
                                            <SidebarMenuButton
                                                asChild
                                                isActive={page.url.startsWith(
                                                    resolveUrl(item.href),
                                                )}
                                                tooltip={{ children: item.title }}
                                             >
                                            <Link href={item.href} prefetch>
                                                {item.icon && <item.icon />}
                                                <span>{item.title}</span>
                                            </Link>
                                        </SidebarMenuButton>
                                    </SidebarMenuItem>
                                    )
                                })}
                            </SidebarMenu>
                        </CollapsibleContent>
                    </SidebarGroup>
                </Collapsible>
            ))}
        </>
    );
}
