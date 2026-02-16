import { createI18n } from 'vue-i18n'

const messages = {
  en: {
    dashboard: 'Dashboard',
    totalOrders: 'Total Orders',
    pendingOrders: 'Pending Orders',
    products: 'Products',
    inventoryValue: 'Inventory Value',
    recentOrders: 'Recent Orders',
    customer: 'Customer',
    status: 'Status',
    total: 'Total',
    editProfile: 'Edit Profile',
    save: 'Save',
    notifications: 'Notifications',
  },
  bn: {
    dashboard: 'ড্যাশবোর্ড',
    totalOrders: 'মোট অর্ডার',
    pendingOrders: 'মুলতুবি অর্ডার',
    products: 'প্রোডাক্ট',
    inventoryValue: 'ইনভেন্টরি মান',
    recentOrders: 'সাম্প্রতিক অর্ডার',
    customer: 'গ্রাহক',
    status: 'অবস্থা',
    total: 'মোট',
    editProfile: 'প্রোফাইল সম্পাদনা',
    save: 'সংরক্ষণ',
    notifications: 'নোটিফিকেশন',
  }
}

export const i18n = createI18n({
  locale: 'en',
  fallbackLocale: 'en',
  messages
})
