package com.example.Runnarz;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
import java.time.*;
import com.example.Runnarz.run.Run;
import com.example.Runnarz.run.Location;
@SpringBootApplication
public class RunnarzApplication {
    private static final Logger log = LoggerFactory.getLogger(RunnarzApplication.class);

    public static void main(String[] args) {
        // Correct: Pass your main application class, not ApplicationContext.class
        SpringApplication.run(RunnarzApplication.class, args);
        log.info("Application started successfully ");
    }
    @Bean
    CommandLineRunner runner(){
        return args-> {
            Run run = new Run(1, "1st run", LocalDateTime.now(), null, 5,Location.OUTDOOR);
            log.info("Run:"+run);
        };
    }
}