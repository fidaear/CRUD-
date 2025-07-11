package com.example.Runnarz.run;
import jakarta.validation.constraints.Positive;
import org.hibernate.validator.constraints.NotEmpty;

import java.time.*;
public record Run( Integer id,
        @NotEmpty
        String title,
        LocalDateTime StartedOn,
        LocalDateTime CompletedOn,
        @Positive
        Integer miles,
        Location location) {


}
