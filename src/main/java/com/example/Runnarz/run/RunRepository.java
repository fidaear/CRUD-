package com.example.Runnarz.run;

import jakarta.annotation.PostConstruct;
import org.springframework.stereotype.Repository;

import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Repository
public class RunRepository {

    private final List<Run> runs = new ArrayList<>();

    public RunRepository() {
        // No need for @Autowired here in constructor
    }

    public Optional<Run> findById(Integer id) {
        return runs.stream()
                .filter(run -> run.id() == id)
                .findFirst();
    }

    public List<Run> findAll() {
        return runs;
    }
    void create(Run run){
         runs.add(run);}
    void update(Run run ,Integer id){
        Optional<Run> existingRun= findById(id);
        if (existingRun.isPresent()){
            runs.set(runs.indexOf(existingRun.get()),run);
        }
    }
    void delete(Integer id){
        runs.removeIf(run -> run.id().equals(id));
    }

    @PostConstruct
    private void init() {
        runs.add(new Run(1, "Monday Morning",
                LocalDateTime.now(),
                null, 5, Location.OUTDOOR));

        runs.add(new Run(2, "Wednesday evening run",
                LocalDateTime.now(),
                null, 5, Location.INDOOR));
    }

}
