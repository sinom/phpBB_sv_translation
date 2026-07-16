#!/usr/bin/env python3

import subprocess
import datetime
from collections import defaultdict
from pathlib import Path


OUTPUT = Path("images/commit-heatmap.svg")

WIDTH = 1200
HEIGHT = 420

BACKGROUND = "#0B1020"
TEXT = "#E5E7EB"
MUTED = "#9CA3AF"
BORDER = "#FFCC00"

LEVELS = [
    "#111827",
    "#064E3B",
    "#047857",
    "#16A34A",
    "#FFCC00",
]


def get_commits():
    result = subprocess.run(
        [
            "git",
            "log",
            "--format=%ad",
            "--date=short",
            "--all",
        ],
        capture_output=True,
        text=True,
        check=True,
    )

    commits = defaultdict(int)

    for line in result.stdout.splitlines():
        commits[line.strip()] += 1

    return commits


def get_year():
    return datetime.date.today().year


def get_heat_level(count, maximum):
    if count == 0:
        return LEVELS[0]

    ratio = count / maximum

    if ratio <= 0.25:
        return LEVELS[1]
    elif ratio <= 0.50:
        return LEVELS[2]
    elif ratio <= 0.75:
        return LEVELS[3]
    else:
        return LEVELS[4]


def generate_svg(commits):

    today = datetime.date.today()
    start = today - datetime.timedelta(days=364)

    maximum = max(commits.values()) if commits else 1

    total = sum(commits.values())

    svg = []

    svg.append(
        f"""
<svg xmlns="http://www.w3.org/2000/svg"
     width="{WIDTH}"
     height="{HEIGHT}"
     viewBox="0 0 {WIDTH} {HEIGHT}">

<style>
text {{
    font-family: Arial, Helvetica, sans-serif;
}}
</style>

<rect width="100%" height="100%" fill="{BACKGROUND}" rx="12"/>

<rect x="20" y="20"
      width="{WIDTH-40}"
      height="{HEIGHT-40}"
      fill="none"
      stroke="{BORDER}"
      stroke-opacity="0.25"
      rx="12"/>

<text x="50" y="70"
      fill="{TEXT}"
      font-size="28"
      font-weight="bold">
🇸🇪 {total} bidrag under {today.year}
</text>
"""
    )

    # Month labels

    month_names = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "Maj",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Okt",
        "Nov",
        "Dec",
    ]

    cell = 18
    gap = 5

    x_start = 100
    y_start = 120

    previous_month = None

    for day_index in range(365):

        day = start + datetime.timedelta(days=day_index)

        week = day_index // 7
        weekday = day.weekday()

        x = x_start + week * (cell + gap)
        y = y_start + weekday * (cell + gap)

        color = get_heat_level(
            commits.get(str(day), 0),
            maximum
        )

        svg.append(
            f"""
<rect x="{x}"
      y="{y}"
      width="{cell}"
      height="{cell}"
      rx="4"
      fill="{color}">
<title>
{day.strftime("%Y-%m-%d")}
{commits.get(str(day),0)} commits
</title>
</rect>
"""
        )

        if day.month != previous_month:

            svg.append(
                f"""
<text x="{x}"
      y="105"
      fill="{TEXT}"
      font-size="14">
{month_names[day.month-1]}
</text>
"""
            )

            previous_month = day.month


    # Week labels

    weekdays = [
        "Mån",
        "Tis",
        "Ons",
        "Tor",
        "Fre",
        "Lör",
        "Sön",
    ]

    for i, name in enumerate(weekdays):

        svg.append(
            f"""
<text x="45"
      y="{y_start + i*(cell+gap)+14}"
      fill="{MUTED}"
      font-size="12">
{name}
</text>
"""
        )


    # Legend

    svg.append(
        """
<text x="850"
      y="360"
      fill="#9CA3AF"
      font-size="14">
Mindre aktivitet
</text>
"""
    )


    for i, color in enumerate(LEVELS):

        svg.append(
            f"""
<rect x="{1000+i*25}"
      y="345"
      width="18"
      height="18"
      rx="4"
      fill="{color}"/>
"""
        )


    svg.append(
        """
<text x="1130"
      y="360"
      fill="#9CA3AF"
      font-size="14">
Mer aktivitet
</text>
"""
    )


    svg.append("</svg>")


    OUTPUT.parent.mkdir(exist_ok=True)

    OUTPUT.write_text(
        "\n".join(svg),
        encoding="utf-8"
    )


if __name__ == "__main__":

    commits = get_commits()

    generate_svg(commits)

    print(
        f"Created {OUTPUT}"
    )
