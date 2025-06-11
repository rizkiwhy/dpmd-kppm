<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem, NavGroup } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';

defineProps<{
    items: NavGroup[];
}>();

const page = usePage();
</script>

<template>
    <SidebarGroup class="px-2 py-0" v-for="item in items">
        <SidebarGroupLabel>{{ item.title }}</SidebarGroupLabel>
        <SidebarMenu>
            <SidebarMenuItem v-for="navItem in item.items" :key="navItem.title">
                <SidebarMenuButton as-child :is-active="navItem.href === page.url" :tooltip="navItem.title">
                    <Link :href="navItem.href">
                        <component :is="navItem.icon" />
                        <span>{{ navItem.title }}</span>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarGroup>
</template>
