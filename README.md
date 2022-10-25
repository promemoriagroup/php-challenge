# Php challenge

In questo challenge ti viene richiesto di produrre uno script PHP che data una cartella contenente due sottocartelle con y files ciascuna, di cui alcuni duplicati, generi un file CSV contenente unicamente i nomi files dei duplicati e la relativa ricorrenza; ad esempio, dato il seguente filesystem:
```
VIDEO
├── H-264
│   ├── 8mm_BW
│   │   ├── Tape_11.0.mp4
│   │   ├── Tape_57.0.mp4
│   │   ├── Tape_7.0.mp4
│   │   └── Tape_9.0.mp4
│   ├── Super8_BW
│   │   ├── Tape_01.0.mp4
│   │   ├── Tape_06.0.mp4
│   │   ├── Tape_22.0.mp4
│   │   ├── Tape_35.0.mp4
│   │   ├── Tape_38.0.mp4
│   │   ├── Tape_11.0.mp4
│   │   ├── Tape_11.0.mp4
│   │   └── Tape_9.0.mp4       
```
il CSV generato sarà:
* Tape_9.0.mp4,
* Tape_11.0.mp4

## Come procedere

Forka questa repository e inizia a scrivere il tuo codice!
