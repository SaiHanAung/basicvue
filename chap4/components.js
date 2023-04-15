
export const selectWeekday =  {
    data() {
        return {
            days: ['Sunday', 'Monday', '...', 'Saturday'],
        }
    },
    template: `
        <select class="form-select" @change="$emit('update:model-value', $event.target.value)">
            <option v-for="d in days" :value="d">{{d}}</option>
        </select>
    `
}

//สามารถสร้างและส่งออกออบเจ็กต์อื่นๆ ได้อีก
//export const demo = {  }