
<script setup>
import { usePage } from '@inertiajs/vue3';
import { ref } from 'vue';

import UpdateEmployee from '../Employee/UpdateEmployee.vue';
</script>

<template>
<div class="container mx-auto px-4">
<div role="tablist" className="tabs tabs-lifted">
    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Personal Information" checked/>
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6">
      <UpdateEmployee></UpdateEmployee>
    </div>
  
    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Family Background"  />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>
  
    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Educational Background" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Civil Service Eligibility" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Work Experience" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Voluntary Work" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Training Programs Attended" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Educational Background" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

    <input type="radio" name="my_tabs_2" role="tab" className="tab" aria-label="Other Information" />
    <div role="tabpanel" className="tab-content bg-base-100 border-base-300 rounded-box p-6"></div>

  </div>
</div>
</template>