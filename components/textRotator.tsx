import { useState, useEffect } from "react";
import styles from "./textrotator.module.scss";

type Letter = {
  char: string;
  key: number;
};

const words = [
  "searchable",
  "shareable",
  "optimized",
  "user-friendly",
  "accessible",
  "better",
];

const TextRotator = () => {
  const [currentWordIndex, setCurrentWordIndex] = useState(0);
  const [letters, setLetters] = useState<Letter[]>(
    words[0].split("").map((char) => ({ char, key: Math.random() }))
  );

  useEffect(() => {
    const changeWord = () => {
      const nextWordIndex = (currentWordIndex + 1) % words.length;
      const nextWord = words[nextWordIndex].split("");

      setLetters((prevLetters) => {
        const maxLength = Math.max(prevLetters.length, nextWord.length);
        const newLetters: Letter[] = [];

        for (let i = 0; i < maxLength; i++) {
          newLetters.push({
            char: nextWord[i] || " ",
            key: Math.random(),
          });
        }

        return newLetters;
      });

      setCurrentWordIndex(nextWordIndex);
    };

    const intervalId = setInterval(changeWord, 4000);

    return () => {
      clearInterval(intervalId);
    };
  }, [currentWordIndex]);

  return (
    <div className="nx-mt-2 nx-text-2xl nx-font-light nx-tracking-tight nx-text-slate-900 dark:nx-text-slate-100">
      <p>
        MetaTags make your website{" "}
        <span className={styles.word}>
          {letters.map(({ char, key }) => (
            <span key={key} className={styles.letter}>
              {char}
            </span>
          ))}
        </span>
         .<br />
      </p>
    </div>
  );
};

export default TextRotator;
