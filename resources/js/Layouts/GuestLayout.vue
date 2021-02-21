<template>
    <div>
        <jet-banner />

        <div class="min-h-screen bg-gray-100">
            <Navbar></Navbar>
            <!-- Page Content -->
            <main>
                <slot name="content"></slot>
            </main>
        </div>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
    import Navbar from '../Components/Navigation/Navbar.vue'

    export default {
        components: {
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
            Navbar,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            
        }
    }
</script>

