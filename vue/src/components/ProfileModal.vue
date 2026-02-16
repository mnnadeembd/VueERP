<template>
  <div v-if="visible" class="fixed inset-0 bg-black/30 flex items-center justify-center z-50">
    <div class="bg-white rounded p-6 w-96">
      <h3 class="text-lg font-semibold mb-4">{{ $t('editProfile') }}</h3>
      <input type="text" v-model="name" placeholder="Name" class="border p-2 w-full mb-3 rounded"/>
      <input type="email" v-model="email" placeholder="Email" class="border p-2 w-full mb-3 rounded"/>
      <div class="flex justify-end space-x-2">
        <button @click="$emit('close')" class="px-4 py-2 rounded bg-gray-200">Cancel</button>
        <button @click="saveProfile" class="px-4 py-2 rounded bg-green-600 text-white">{{ $t('save') }}</button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const props = defineProps({ visible: Boolean })
const emit = defineEmits(['close'])

const name = ref('John Doe')
const email = ref('johndoe@example.com')

function saveProfile() {
  console.log({ name: name.value, email: email.value })
  emit('close')
}
</script>
