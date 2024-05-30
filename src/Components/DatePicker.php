<?php

namespace OrbtUI\Components;

use OrbtUI\OrbtUI;

class DatePicker extends OrbtUI {

    public function __construct(
        public ?string $size        = 'md',
        public ?string $labelText   = null,
        public ?string $helperText  = null,
        public ?string $value       = null,
        public ?string $placeholder = null,
        public ?bool   $readOnly    = false,
        public ?bool   $disabled    = false
    ) {

        $this->component()->view('forms.date-picker');

        if ($this->value) {
            $this->properties()->add('value', $this->value);
        }

        if ($this->placeholder) {
            $this->properties()->add('placeholder', $this->placeholder);
        }

        if ($this->readOnly) {
            $this->properties()->add('readonly', 'readonly');
        }

        if ($this->disabled) {
            $this->properties()->add('disabled', 'disabled');
        }

        $this->livewire()->ignore();

        $this->alpine()
            ->data('{
                value: [\'02/01/2022\', \'02/05/2022\'],
                init() {
                    $(this.$refs.picker).daterangepicker({
                        parentEl: \'.modal-body\',
                        startDate: this.value[0],
                        endDate: this.value[1],
                        ranges: {
                            \'Hoje\': [moment(), moment()],
                            \'Ontem\': [moment().subtract(1, \'days\'), moment().subtract(1, \'days\')],
                            \'Last 7 Days\': [moment().subtract(6, \'days\'), moment()],
                            \'Last 30 Days\': [moment().subtract(29, \'days\'), moment()],
                            \'This Month\': [moment().startOf(\'month\'), moment().endOf(\'month\')],
                            \'Last Month\': [moment().subtract(1, \'month\').startOf(\'month\'), moment().subtract(1, \'month\').endOf(\'month\')]
                        },
                    }, (start, end) => {
                        this.value[0] = start.format(\'MM/DD/YYYY\')
                        this.value[1] = end.format(\'MM/DD/YYYY\')
                    })

                    this.$watch(\'value\', () => {
                        $(this.$refs.picker).data(\'daterangepicker\').setStartDate(this.value[0])
                        $(this.$refs.picker).data(\'daterangepicker\').setEndDate(this.value[1])
                    })
                },
            }');

    }

}
