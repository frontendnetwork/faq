import { useConfig, useTheme } from "nextra-theme-docs";
import { useMounted } from "nextra/hooks";
import { z } from "zod";

export const themeOptionsSchema = z.strictObject({
  light: z.string(),
  dark: z.string(),
  system: z.string(),
});

export default function ThemeSwitch() {
  const { setTheme } = useTheme();

  return (
    <button
      type="button"
      className="inline-flex items-center rounded-full border dark:border-gray-700 p-0.5 max-lg:hidden"
      aria-label="Toggle Theme"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width={24}
        height={24}
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        strokeWidth={2}
        strokeLinecap="round"
        strokeLinejoin="round"
        className="lucide lucide-sun size-7 rounded-full p-1.5 bg-accent text-[#1e4b9d] dark:text-white/70 bg-[#e3effd] dark:bg-transparent"
        onClick={() => setTheme("light")}
      >
        <circle cx={12} cy={12} r={4} />
        <path d="M12 2v2" />
        <path d="M12 20v2" />
        <path d="m4.93 4.93 1.41 1.41" />
        <path d="m17.66 17.66 1.41 1.41" />
        <path d="M2 12h2" />
        <path d="M20 12h2" />
        <path d="m6.34 17.66-1.41 1.41" />
        <path d="m19.07 4.93-1.41 1.41" />
      </svg>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width={24}
        height={24}
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        strokeWidth={2}
        strokeLinecap="round"
        strokeLinejoin="round"
        className="lucide lucide-moon size-7 rounded-full p-1.5 text-black/70 dark:text-white/80 dark:bg-gray-700"
        onClick={() => setTheme("dark")}
      >
        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
      </svg>
    </button>
  );
}
