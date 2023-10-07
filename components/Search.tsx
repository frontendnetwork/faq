import classes from "./searchResult.module.scss";

interface Props {
  title: string;
  url: string;
  chevron: boolean;
  description: string;
}

export default function Search({ title, url, chevron, description }: Props) {
  return (
    <div className={classes.searchBox}>
      <div className={classes.searchBox_top}>
        <span className={classes.searchBox_top_title}>
          {title}
        </span>
        <div className={classes.link}>
          <span className={classes.url}>{url}</span>
          {chevron && <span className={classes.chevron}></span>}
        </div>
        <span className={classes.description}>
          {description}
        </span>
      </div>
    </div>
  );
}
