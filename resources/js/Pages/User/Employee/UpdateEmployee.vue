<script setup>
import { reactive } from 'vue'
import { router, useForm } from '@inertiajs/vue3'


const form = useForm({
  fname: null,
  mname: null,
  lname: null,
  agency_employee_no: null,
  extension: null,
  dob: null,
  place_of_birth: null,
  sex: null,
  civil_status: null,
  height: null,
  weight: null,
  blood_type: null,
  gsis_id_no: null,
  pag_ibig_id_no: null,
  philhealth_id_no: null,
  sss_no: null,
  tin_no: null,
  citizenship: null,
  dual_citizenship: null,
  citizenship_country: null,
  mob_no: null,
  residential_zip_code: null,
  residential_house_number: null,
  residential_street: null,
  residential_subdivision: null,
  residential_barangay: null,
  residential_city_municipality: null,
  residential_province: null,
  permanent_zip_code: null,
  permanent_house_number: null,
  permanent_street: null,
  permanent_subdivision: null,
  permanent_barangay: null,
  permanent_city_municipality: null,
  permanent_province: null,
  offices_id: null,
  tel_no: null,
})

  return { form }


</script>

<template>
  <div class="container max-w-screen-xl mx-auto sm:max-w-full">
    
    <form @submit.prevent="submit" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
      <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
          Personal Information
        </h3>
      </div>
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-2">
            <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
            <input v-model="form.fname" type="text" name="fname" id="fname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " required>
          </div>
          <div class="col-span-6 sm:col-span-2">
            <label for="mfname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
            <input v-model="form.mfname" type="text" name="mfname" id="mfname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-2">
            <label for="lfname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
            <input v-model="form.lfname" type="text" name="lfname" id="lfname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-1">
            <label for="extension" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Extension</label>
            <input v-model="form.extension" type="text" name="extension" id="extension" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="col-span-6 sm:col-span-1">
            <label for="dob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Birth</label>
            <input v-model="form.dob" type="date" name="dob" id="dob" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-2">
            <label for="place-of-birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Place of Birth</label>
            <input v-model="form.place_of_birth" type="text" name="place-of-birth" id="place-of-birth" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-1">
            <label for="sex" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sex</label>
            <select v-model="form.sex" name="sex" id="sex" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="" >
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <div class="col-span-6 sm:col-span-1">
            <label for="civil-status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
            <select v-model="form.civil_status" name="civil-status" id="civil-status" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="divorced">Divorced</option>
              <option value="widowed">Widowed</option>
            </select>
          </div>
          <div class="col-span-6 sm:col-span-1">
            <label for="height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Height (cm)</label>
            <input v-model="form.height" type="number" name="height" id="height" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
          </div>
          <div class="col-span-6 sm:col-span-1">
            <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight (kg)</label>
            <input v-model="form.weight" type="number" name="weight" id="weight" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
          </div>
         <div class="col-span-6 sm:col-span-1">
            <label for="blood-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Type</label>
            <select v-model="form.blood_type" name="blood-type" id="blood-type" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Select Blood Type</option>
              <option value="">A+</option>
              <option value="-">A-</option>
              <option value="">B+</option>
              <option value="">B-</option>
              <option value="">AB+</option>
              <option value="">AB-</option>
              <option value="">O+</option>
              <option value="">O-</option>
            </select>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="gsis-id-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GSIS ID No</label>
            <input v-model="form.gsis_id_no" type="text" name="gsis-id-no" id="gsis-id-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="pag-ibig-id-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pag-IBIG ID No</label>
            <input v-model="form.pag_ibig_id_no" type="text" name="pag-ibig-id-no" id="pag-ibig-id-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="philhealth-id-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PhilHealth ID No</label>
            <input v-model="form.philhealth_id_no" type="text" name="philhealth-id-no" id="philhealth-id-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="sss-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SSS No</label>
            <input v-model="form.sss_no" type="text" name="sss-no" id="sss-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="tin-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TIN No</label>
            <input v-model="form.tin_no" type="text" name="tin-no" id="tin-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="agency-employee-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agency Employee No</label>
            <input v-model="form.agency_employee_no" type="text" name="agency-employee-no" id="agency-employee-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="citizenship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
            <input v-model="form.citizenship" type="text" name="citizenship" id="citizenship" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="dual-citizenship-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dual Citizenship</label>
            <select v-model="form.dual_citizenship.type" name="dual-citizenship-type" id="dual-citizenship-type" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="">Select Type</option>
              <option value="by_birth">By Birth</option>
              <option value="by_naturalization">By Naturalization</option>
            </select>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="dual-citizenship-country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
            <input v-model="form.dual_citizenship.country" type="text" name="dual-citizenship-country" id="dual-citizenship-country" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="mob-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile Number</label>
            <input v-model="form.mob_no" type="text" name="mob-no" id="mob-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
            <label for="residential-add" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential Address</label>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-zip-code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential Zip Code</label>
              <input v-model="form.residential_zip_code" type="text" name="residential-zip-code" id="residential-zip-code" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-house-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential House Number</label>
              <input v-model="form.residential_house_number" type="text" name="residential-house-number" id="residential-house-number" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential Street</label>
              <input v-model="form.residential_street" type="text" name="residential-street" id="residential-street" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-subdivision" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential Subdivision</label>
              <input v-model="form.residential_subdivision" type="text" name="residential-subdivision" id="residential-subdivision" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-barangay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential Barangay</label>
              <input v-model="form.residential_barangay" type="text" name="residential-barangay" id="residential-barangay" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-city-municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential City/Municipality</label>
              <input v-model="form.residential_city_municipality" type="text" name="residential-city-municipality" id="residential-city-municipality" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="residential-province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Residential Province</label>
              <input v-model="form.residential_province" type="text" name="residential-province" id="residential-province" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Address</label>
            <div class="col-span-6 sm:col-span-3">
                <label for="permanent-zip-code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Street</label>
                <input v-model="form.permanent_zip_code" type="text" name="permanent-house-number" id="permanent-house-number" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="permanent-house-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Street</label>
                <input v-model="form.permanent_house_number" type="text" name="permanent-house-number" id="permanent-house-number" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="permanent-street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Street</label>
                <input v-model="form.permanent_street" type="text" name="permanent-street" id="permanent-street" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="permanent-subdivision" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Subdivision</label>
                <input v-model="form.permanent_subdivision" type="text" name="permanent-subdivision" id="permanent-subdivision" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="permanent-barangay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Barangay</label>
                <input v-model="form.permanent_barangay" type="text" name="permanent-barangay" id="permanent-barangay" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="permanent-city-municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent City/Municipality</label>
                <input v-model="form.permanent_city_municipality" type="text" name="permanent-city-municipality" id="permanent-city-municipality" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="permanent-province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permanent Province</label>
                <input v-model="form.permanent_province" type="text" name="permanent-province" id="permanent-province" class="input-field shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>  

          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="office-id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Office ID</label>
            <input v-model="form.office_id" type="text" name="office-id" id="office-id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="tel-no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telephone Number</label>
            <input v-model="form.tel_no" type="text" name="tel-no" id="tel-no" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>
        </div>
      </div>
      <div class="text-center pb-6">
      <button type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </div>
    </form>
  </div>
  
</template>